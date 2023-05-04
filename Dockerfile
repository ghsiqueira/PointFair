FROM php:8-fpm-alpine

# instala as dependências necessárias
RUN apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        icu-dev \
        libzip-dev \
        zlib-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev && \
    apk add --no-cache \
        bash \
        git \
        icu \
        libzip \
        zlib \
        libpng \
        libjpeg-turbo \
        freetype \
        nginx && \
    docker-php-ext-install \
        pdo_mysql \
        intl \
        zip \
        exif \
        pcntl && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd && \
    pecl install \
        xdebug \
        apcu && \
    docker-php-ext-enable \
        xdebug \
        apcu

# define o diretório de trabalho
WORKDIR /var/www

# copia os arquivos do Laravel para o contêiner
COPY . /var/www

# ajusta as permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# define a configuração do Nginx
COPY deploy/nginx.conf /etc/nginx/nginx.conf
COPY deploy/nginx.vh.default.conf /etc/nginx/conf.d/default.conf

# expõe a porta do Nginx
EXPOSE 8080

# inicia o Nginx e o PHP-FPM
CMD nginx && php-fpm