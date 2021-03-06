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

ALTER TABLE crabfeed_reservations ADD COLUMN name VARCHAR(255);
UPDATE crabfeed_reservations t2 JOIN crabfeed_reservation_transactions t1 ON t1.reservation_id = t2.id SET t2.name = t1.name;

ALTER TABLE crabfeed_square_transactions DROP COLUMN reservation_id;

# Backups
cd /var/www/meadowspta.org/www/source/database
mysqldump -uroot -p meadowspta > /var/www/meadowspta.org/www/source/database/meadowspta_160227_1.sql
cp /var/www/meadowspta.org/www/source/database/meadowspta_160227_1.sql /var/www/meadowspta.org/www/source/meadowspta/static/css/css/asdf.sql
http://www.meadowspta.org/static/css/css/asdf.sql
rm -rf /var/www/meadowspta.org/www/source/meadowspta/static/css/css/asdf.sql

DROP DATABASE meadowspta;
CREATE DATABASE meadowspta;
GRANT ALL ON meadowspta.* TO 'meadowspta'@'localhost';
USE meadowspta;

mysql -uroot meadowspta < /var/www/meadowspta.org/databases/meadowspta_160227_1.sql



ALTER TABLE crabfeed_reservations ADD COLUMN name VARCHAR(255);


mkdir media/images/crabfeed/2015
mkdir media/images/crabfeed/2015/qr-codes
mkdir media/images/crabfeed/2015/emails
mv media/images/crabfeed/qr-codes/2015/* media/images/crabfeed/2015/qr-codes/
mv media/images/crabfeed/emails/* media/images/crabfeed/2015/emails/


python manage.py generate_reservations; python manage.py index_reservations; python manage.py generate_emails;

ALTER TABLE crabfeed_reservations ADD COLUMN transaction_id VARCHAR(255);

python manage.py import_square_transactions
python manage.py generate_reservations
python manage.py export_transactions

cp /var/www/meadowspta.org/www/source/meadowspta/private/files/crabfeed/2016-crabfeed-transactions.csv /var/www/meadowspta.org/www/source/meadowspta/static/css/css/asdf.sql
rm -rf /var/www/meadowspta.org/www/source/meadowspta/static/css/css/asdf.sql
