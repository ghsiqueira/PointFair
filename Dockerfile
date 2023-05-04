FROM php:8.0-fpm-alpine

RUN apk add --no-cache \
    php8 \
    php8-dom \
    php8-xml \
    php8-simplexml \
    php8-xmlwriter \
    php8-tokenizer \
    php8-mbstring \
    php8-ctype \
    php8-json \
    php8-pdo \
    php8-pdo_mysql \
    php8-phar \
    php8-zip \
    php8-curl \
    php8-opcache \
    php8-gd \
    php8-openssl \
    php8-session \
    php8-fileinfo \
    php8-iconv \
    curl \
    unzip \
    git \
    bash

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev

RUN php artisan key:generate --force

CMD php-fpm