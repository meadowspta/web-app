<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Auth_MongoTest extends Kohana_Unittest_TestCase {
	
	public function setUp()
	{
		parent::setUp();
		
		Session::$default = 'cookie';
		$this->session = Session::instance();
		$this->auth = Auth::instance();
		$this->session_key = Kohana::$config->load('auth.session_key');
		
		// Clear out logged in user.
		$this->session->delete($this->session_key);
		
		// Create test user.
		$this->user = SimpleHoney_Test_User::generate_user(array(
			'email' => 'atestuser@whereami.com',
			'password' => 'asdf12345',
		), FALSE);
	}
	
	public function tearDown()
	{
		parent::tearDown();
		
		SimpleHoney_Test_User::delete_users();
		
		// Clear out logged in user.
		$this->session->delete($this->session_key);
	}
	
	public function testLoggedIn()
	{
		$this->assertFalse($this->auth->logged_in());
		
		// Create a dummy user session.
		$this->session->set($this->session_key, $this->user->id);
		
		$this->assertTrue($this->auth->logged_in());
	}
	
	public function testLogin()
	{
		$this->assertTrue($this->auth->_login('atestuser@whereami.com', 'asdf12345'));
		$this->assertFalse($this->auth->_login('atestuser@whereami.com', 'asdf12345asdf'));
	}
	
	public function testForceLogin()
	{
		$this->auth->force_login($this->user);
		$user_id = $this->session->get($this->session_key);
		$this->assertEquals($this->user->id, $user_id);
	}
	
	public function testAutoLogin()
	{
		$this->markTestIncomplete('Not done yet.');
	}
	
	public function testLogout()
	{
		// Log user in.
		$this->auth->force_login($this->user);
		$user_id = $this->session->get($this->session_key);
		$this->assertEquals($this->user->id, $user_id);
		
		// Log user out and check.
		$this->auth->logout();
		$user_id = $this->session->get($this->session_key);
		$this->assertEquals(NULL, $user_id);
	}
	
	public function testPassword()
	{
		$password = $this->auth->hash_password('asdf12345');
		$this->assertEquals($password, $this->auth->password($this->user));
	}
	
	public function testCompleteLogin()
	{
		$user_id = $this->session->get($this->session_key);
		$this->assertEquals(NULL, $user_id);
		
		$this->auth->force_login($this->user);
		$user_id = $this->session->get($this->session_key);
		$this->assertEquals($this->user->id, $user_id);
	}
	
	public function testCheckPassword()
	{
		$this->markTestIncomplete('Not done yet.');
	}
	
	public function testGenerateAccessToken()
	{
		$token = $this->auth->generate_access_token();
		$this->assertEquals(strlen(md5('asdf')), strlen($token));
	}
	
	public function testIsAccessTokenValid()
	{
		$url = $this->user->get_forced_login_url();
		$url = parse_url($url);
		parse_str($url['query'], $query);
		
		// Check if token is valid.
		$result = $this->auth->is_access_token_valid($this->user, $query['token']);
		$this->assertTrue($result);
		
		// Muck the data to make the token invalid.
		$this->user->set('access_token.expires', time()-999999999)
			->save()
			->load();
		
		// Check again.
		$result = $this->auth->is_access_token_valid($this->user, $query['token']);
		$this->assertFalse($result);
	}
	
	public function testDeactivateAccessToken()
	{
		// Set access token.
		$this->user->get_forced_login_url();
		
		// Check status.
		$this->assertEquals(0, $this->user->access_token['accessed']);
		
		$this->auth->deactivate_access_token($this->user);
		
		// Check status again.
		$this->assertEquals(1, $this->user->access_token['accessed']);
		
		$config = Kohana::$config->load('auth');
		$duration = $config['access_token']['deactivation_duration'];
		
		$this->assertEquals(time()+$duration, $this->user->access_token['expires']);
	}
	
	public function testSetUserEmailVerified()
	{
		// Default should be unverified.
		$this->assertEquals(0, $this->user->email_verified);
		
		// Set to verified.
		$this->auth->set_user_email_verified($this->user, TRUE);
		$this->assertEquals(1, $this->user->email_verified);
		
		// Set to unverified.
		$this->auth->set_user_email_verified($this->user, FALSE);
		$this->assertEquals(0, $this->user->email_verified);
	}
}