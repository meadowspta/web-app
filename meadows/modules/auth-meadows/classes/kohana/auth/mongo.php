<?php defined('SYSPATH') OR die('No direct access allowed.');

class Kohana_Auth_Mongo extends Auth {

	/**
	 * Checks if a session is active.
	 *
	 * @param		string	 role name
	 * @param		array		 collection of role names
	 * @return	boolean
	 */
	public function logged_in($role = NULL)
	{
		$status = FALSE;
		
		// Get the user from the session
		$user_id = $this->_session->get($this->_config['session_key']);
		
		if ($user_id)
		{
			$user = new Model_User($user_id);
			
			if (is_object($user) AND $user instanceof Model_User AND $user->id)
			{
				$user->load();

				// Everything is okay so far
				$status = TRUE;

				// Inactive users are never allowed
				if ($user->status != 1)
				{
					$status = FALSE;
				}
				// Check for a specific role
				else if ( ! empty($roles))
				{
					if ($user->is_admin())
					{
						$status = TRUE;
					}
					else
					{
						$status = (in_array($role, $user->role));
					}
				}
			}
		}
		
		return $status;
	}

	/**
	 * Logs a user in.
	 *
	 * @param string - An email address.
	 * @param string - password.
	 * @param boolean - enable auto-login.
	 * @return boolean
	 */
	public function _login($email, $password, $remember = FALSE)
	{
		// Load the user
		$user = Mongo_Document::factory('user', array('email' => strtolower($email)));
		$user->load();
		
		// If the passwords match, perform a login
		if ($user->loaded() && $user->status == 1 && $user->password === $this->hash_password($password))
		{
			if ($remember === TRUE)
			{
				// Create a new autologin token
				$token = Mongo_Document::factory('user_token');

				// Set token data
				$token->user = $email;
				$token->expires = time() + $this->_config['lifetime'];
				$token->save();

				// Set the autologin cookie
				cookie::set('authautologin', $token->token, $this->_config['lifetime']);
			}
			
			// Finish the login
			$this->complete_login($user);

			return TRUE;
		}

		// Login failed
		return FALSE;
	}

	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param mixed - Model_User object or email.
	 * @return boolean
	 */
	public function force_login($user_or_email)
	{
		if ( ! is_object($user_or_email))
		{
			// Load the user
			$user_or_email = Mongo_Document::factory('user', array('email' => strtolower($user_or_email)));
			if( ! $user->loaded())
			{
				return FALSE;
			}
		}

		// Mark the session as forced, to prevent users from changing account information
		$_SESSION['auth_forced'] = TRUE;
		
		// Run the standard completion
		return $this->complete_login($user_or_email);
	}

	/**
	 * Logs a user in, based on the authautologin cookie.
	 *
	 * @return	boolean
	 */
	public function auto_login()
	{
		if ($token = cookie::get('authautologin'))
		{
			// Load the token and user
			$token = Mongo_Document::factory('user_token', array('token' => $token));

			if ($token->loaded() AND $token->user->loaded())
			{
				if ($token->user_agent === sha1(Request::$user_agent))
				{
					// Save the token to create a new unique token
					$token->save();

					// Set the new token
					cookie::set('authautologin', $token->token, $token->expires - time());

					// Complete the login with the found data
					$this->complete_login($token->user);

					// Automatic login was successful
					return TRUE;
				}

				// Token is invalid
				$token->delete();
			}
		}

		return FALSE;
	}

	/**
	 * Log a user out and remove any auto-login cookies.
	 *
	 * @param boolean - completely destroy the session
	 * @param boolean - remove all tokens for user
	 * @return boolean
	 */
	public function logout($destroy = FALSE, $logout_all = FALSE)
	{
		if ($token = cookie::get('authautologin'))
		{
			// Delete the autologin cookie to prevent re-login
			cookie::delete('authautologin');

			// Clear the autologin token from the database
			$token = Mongo_Document::factory('user_token', array('token' => $token));

			if ($token->loaded() AND $logout_all)
			{
				$token->collection()->remove(array('_user' => $token->_user));
			}
			elseif ($token->loaded())
			{
				$token->delete();
			}
		}
		
		return parent::logout($destroy);
	}

	/**
	 * Get the stored password for a username.
	 *
	 * @param		mixed	Model_User object or email
	 * @return	string
	 */
	public function password($user_or_email)
	{
		if ( ! is_object($user_or_email))
		{
			// Load the user
			$user_or_email = Mongo_Document::factory('user', array('email' => strtolower($user_or_email)));
		}

		return $user_or_email->password;
	}

	/**
	 * Complete the login for a user by incrementing the logins and setting
	 * session data: user_id, username, roles
	 *
	 * @param object - A Model_User object.
	 * @return void
	 */
	protected function complete_login($user)
	{
		// Set the last login date
		$user->set('last_login', time())->save();
		
		// Regenerate session_id
		$this->_session->regenerate();

		// Store user ID in session
		$this->_session->set($this->_config['session_key'], $user->id);

		return TRUE;
	}
	
	/**
	 * Generate an access token for forced login.
	 */
	public function generate_access_token()
	{
		return md5($this->_config['hash_key'].time().uniqid());
	}
	
	/**
	 * Checks to see if the password reset url is valid to allow the user
	 * to be forced-logged in without a password.
	 *
	 * @param Model_User - A user data object.
	 * @param string - The access token of the user.
	 * @return bool - TRUE|FALSE whether the url is valid.
	 */
	public function is_access_token_valid(Model_User $user, $token)
	{
		$user_check = new Model_User;
		$query = array(
			'_id' => $user->id,
			'access_token.token' => $token,
			'access_token.expires' => array('$gte' => time()),
		);
		$user_check->load($query);
		
		return $user_check->loaded();
	}
	
	/**
	 * Sets the expiration date of an access token to the configured time in the future.
	 *
	 * @param Model_User - A user data object.
	 * @return void
	 */
	public function deactivate_access_token(Model_User $user)
	{
		$user->load();
		if ($user->access_token['accessed'] == 0)
		{
			$duration = $this->_config['access_token']['deactivation_duration'];
			$user->set('access_token.expires', time() + $duration)
				->set('access_token.accessed', 1)
				->save()
				->load();
		}
	}
	
	/**
	 * Mark the user account as email verified.
	 *
	 * @param Model_User - A user data object.
	 * @return void
	 */
	public function set_user_email_verified(Model_User $user, $verified = FALSE)
	{
		$user->load();
		$email_verified = ($verified === TRUE) ? 1 : 0;
		$user->set('email_verified', $email_verified)->save()->load();
	}
	
	/**
	 * Hash a password.
	 *
	 * @param string - a password to be hashed.
	 * @return string - the hashed password.
	 */
	public function hash_password($password)
	{
		return md5(Cookie::$salt.$password);
	}
	
	/**
	 * 
	 */
	public function check_password($password)
	{
		
	}

} // End Auth_Mongo