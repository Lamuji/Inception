FROM	debian:buster

ARG	DOMAIN_NAME=${DOMAIN_NAME}
ARG     DB_ROOT_PW=${DB_ROOT_PW}
ARG     DB_NAME=${DB_NAME}
ARG     DB_USER=${DB_USER}
ARG     DB_USER_PW=${DB_USER_PW}
ARG     WP_USER=${WP_USER}
ARG     WP_USER_PW=${WP_USER_PW}


RUN	apt update -y
RUN	apt upgrade -y
RUN	apt install mariadb-server -y
RUN	apt install mariadb-common -y
RUN	apt install mariadb-client -y
RUN	chown -R mysql /var/lib/mysql
RUN	chmod 777 /var/lib/mysql

COPY	./conf/my.cnf /etc/mysql/mariadb.conf.d/my.cnf

RUN	chmod 444 /etc/mysql/mariadb.conf.d/my.cnf \
	&& /usr/bin/mysql_install_db --basedir='/usr' --datadir='/var/lib/mysql' \
	&& /usr/sbin/mysqld --datadir='/var/lib/mysql' & sleep 2 \
	&& service mysql start \
	&& mysql --user=root -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME} DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;" \ 
	&& mysql --user=root -e "CREATE USER IF NOT EXISTS '${DB_USER}' IDENTIFIED BY '${DB_USER_PW}';" \ 
	&& mysql --user=root -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}' WITH GRANT OPTION;" \
	&& mysql --user=root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PW}';" \
	&& mysql --user=root -p${DB_ROOT_PW} -e "FLUSH PRIVILEGES;"

EXPOSE	3306/tcp 3306/udp

ENTRYPOINT ["mysqld", "--user=root", "--datadir=/var/lib/mysql"]
