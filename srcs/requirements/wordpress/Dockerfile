FROM	debian:buster

ARG	DOMAIN_NAME=${DOMAIN_NAME}
ARG     DB_ROOT_PW=${DB_ROOT_PW}
ARG     DB_NAME=${DB_NAME}
ARG     DB_USER=${DB_USER}
ARG     DB_USER_PW=${DB_USER_PW}
ARG     WP_USER=${WP_USER}
ARG     WP_USER_PW=${WP_USER_PW}

ENV	DOMAIN_NAME=${DOMAIN_NAME}
ENV     DB_ROOT_PW=${DB_ROOT_PW}
ENV     DB_NAME=${DB_NAME}
ENV     DB_USER=${DB_USER}
ENV     DB_USER_PW=${DB_USER_PW}
ENV     WP_USER=${WP_USER}
ENV     WP_USER_PW=${WP_USER_PW}


RUN	apt update
RUN	apt upgrade -y
RUN	apt install wget \
	php7.3 \
	php7.3-xml \
	php7.3-fpm \
	php7.3-mysql \
	php7.3-common \
	php7.3-cli \
	php7.3-cgi \
	php7.3-json \
	php7.3-opcache \
	php7.3-readline \
	php7.3-mbstring -y 
RUN	mkdir -p /var/www/localhost/wordpress
RUN	cd /usr/local/bin && ls
RUN	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN	chmod +x wp-cli.phar 
RUN 	mv wp-cli.phar /usr/local/bin/wp
RUN	chown -R www-data:www-data /var/www/localhost/wordpress
RUN	wp --allow-root core download --path="/var/www/localhost/wordpress/"

COPY	./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY	./conf/wp-config.php /var/www/localhost/wordpress/wp-config.php
COPY	./conf/wp.sh	.



EXPOSE	9000

ENTRYPOINT	["bash", "wp.sh"]

CMD	["php-fpm7.3", "-F"]
#ENTRYPOINT	["tail", "-f", "/dev/null"]
