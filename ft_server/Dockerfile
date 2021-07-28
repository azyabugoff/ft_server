FROM    debian:buster
WORKDIR /var/www/html

RUN     apt-get -y update
RUN     apt-get -y upgrade
RUN     apt-get -y install nginx
RUN     apt-get -y install mariadb-server
RUN     apt-get -y install php7.3 php7.3-fpm php7.3-mysql php-json php-mbstring php-cli php-gd php-curl php-zip
RUN     apt-get -y install wget
RUN     apt-get -y install vim

COPY    ./srcs/localhost.crt /etc/nginx/ssl/
COPY    ./srcs/localhost.key /etc/nginx/ssl/
COPY    ./srcs/nginx.conf /etc/nginx/sites-enabled

RUN     wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN     tar xzvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN     mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
RUN     rm -rf phpMyAdmin-5.0.2-all-languages.tar.gz

RUN     wget https://wordpress.org/latest.tar.gz
RUN     tar xzvf latest.tar.gz
#RUN     mv wordpress/ /var/www/html

COPY    ./srcs/config.inc.php /var/www/html/phpmyadmin
COPY    ./srcs/wp-config.php /var/www/html/wordpress
COPY    ./srcs/info.php /var/www/html
COPY    ./srcs/autoindex.sh /var/www/html
COPY    ./srcs/server.sh /var/www/html

EXPOSE  80 443

CMD     bash server.sh
