#!/bin/bash

# Install WordPress
echo "Wordpress: creating users..."
wp core install --allow-root --path="/var/www/mait-aad.42.fr/wordpress/public_html/" --url=${WP_URL} --title=${WP_TITLE} --admin_user=${MYSQL_USER} --admin_password=${MYSQL_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
wp user create --allow-root ${MYSQL_USER} ${WP_ADMIN_EMAIL} --user_pass=${MYSQL_PASSWORD};
echo "Wordpress: set up!"
# Start process to keep container running
exec "$@"