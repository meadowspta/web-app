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
DROP TABLE crabfeed_reservation_items;
DROP TABLE crabfeed_reservation_transactions;
DROP TABLE crabfeed_square_transaction_items;
DROP TABLE crabfeed_square_transactions;
DROP TABLE crabfeed_reservations;

# CLI
python manage.py syncdb
python manage.py import_square_transactions

# MySQL
ALTER TABLE crabfeed_reservations ADD COLUMN notes LONGTEXT;
ALTER TABLE crabfeed_reservation_items ADD COLUMN type VARCHAR(255);
UPDATE crabfeed_reservation_items SET type = 'regular';
