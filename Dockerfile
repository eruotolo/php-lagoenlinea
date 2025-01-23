# Use the official PHP-FPM image as the base image
FROM php:5.6.37-fpm-alpine

# Install the GD extension
RUN apk --no-cache add libpng-dev freetype-dev libjpeg-turbo-dev && \
    docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install gd

# # Install the MySQL extension
RUN apk --no-cache add mysql-client mysql-dev
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql

#COPY php.ini /usr/local/etc/php/php.ini

EXPOSE 9000
#CMD tail -f /dev/null
CMD ["php-fpm"]