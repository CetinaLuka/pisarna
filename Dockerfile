FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.
ENV WORDPRESS_DB_HOST=127.0.0.1 \
    WORDPRESS_DB_USER=pisarnaDBtqiwc \
    WORDPRESS_DB_PASSWORD=1CNIWtk0F9 \
    WORDPRESS_DB_NAME=pisarnaDBtqiwc \
    WORDPRESS_TABLE_PREFIX=wp_

COPY . /var/www/html