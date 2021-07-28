#!/bin/bash
chown -R www-data:www-data /var/www/html/*
chmod -R 775 /var/www/html/*
service mysql start
echo "CREATE USER 'newuser'@'localhost' IDENTIFIED BY '';" | mysql -u root --skip-password
echo "CREATE DATABASE IF NOT EXISTS wordpress_db;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress_db.* TO 'newuser'@'localhost';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
service nginx start
service php7.3-fpm start
bash
