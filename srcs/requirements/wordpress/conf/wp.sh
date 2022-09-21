#!/bin/bash
wp --allow-root core install --url="asebrech.42.fr" --path="/var/www/localhost/wordpress" --title="inception" --admin_user="asebrech" --admin_password="42" --admin_email="asebrech@asebrech.fr"
wp --allow-root user create $WP_USER "user42@user42.fr" --user_pass=$WP_USER_PW --role='author' --path="/var/www/localhost/wordpress"
$@
