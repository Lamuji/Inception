#!/bin/bash
wp --allow-root core install --url=$DOMAIN_NAME --path="/var/www/localhost/wordpress/" --title="inception" --admin_user="rfkaier" --admin_password="42" --admin_email="rfkaier@rfkaier.fr"
wp --allow-root user create $WP_USER "user42@user42.fr" --user_pass=$WP_USER_PW --role='author' --path="/var/www/localhost/wordpress"
$@
