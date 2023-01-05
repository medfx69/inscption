#!/bin/bash

# Install WordPress
if [ ! -f /var/www/html/wp-config.php ]; then
	echo "Wordpress: creating users..."
	wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user=${MYSQL_USER} --admin_password=${MYSQL_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
	wp user create --allow-root ${MYSQL_USER} ${WP_ADMIN_EMAIL} --user_pass=${MYSQL_PASSWORD};
	echo "Wordpress: set up!"
fi

# Start process to keep container running
exec "$@"