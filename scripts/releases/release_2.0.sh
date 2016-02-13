# MySQL
USE meadowspta;
DROP TABLE crabfeed_notification_signup;
DROP TABLE crabfeed_volunteer_signup;
DROP TABLE crabfeed_reservation_items;
DROP TABLE crabfeed_reservation_transactions;
DROP TABLE crabfeed_reservations;
DROP TABLE crabfeed_ticket;
DROP TABLE crabfeed_checkin;
DROP TABLE paypal_raw_transactions;
DROP TABLE paypal_transaction_items;
DROP TABLE paypal_transaction_overrides;
DROP TABLE paypal_transactions;

# Testing
DROP TABLE crabfeed_checkin;
DROP TABLE crabfeed_reservations;
DROP TABLE crabfeed_reservation_transactions;
DROP TABLE crabfeed_reservation_items;
DROP TABLE crabfeed_square_transactions;
DROP TABLE crabfeed_square_transaction_items;

# CLI
python manage.py syncdb