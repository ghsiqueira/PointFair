FROM php:8-apache

RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        && docker-php-ext-install pdo_mysql \
        && docker-php-ext-install zip \
        && a2enmod rewrite

COPY . /var/www/html/