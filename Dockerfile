# Use a imagem base do PHP
FROM php:7.4-apache

# Copie os arquivos do projeto para o diretório de trabalho do contêiner
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Instale as dependências do Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copie o arquivo de configuração do Apache para habilitar a reescrita de URLs
COPY ./docker/apache2.conf /etc/apache2/sites-available/000-default.conf

# Habilitar o módulo de reescrita do Apache
RUN a2enmod rewrite

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer clear-cache

# Instalar as dependências do PHP com o Composer
RUN composer install

# Executar os scripts de inicialização do Laravel
RUN composer dump-autoload
RUN php artisan key:generate

# Definir as permissões corretas nas pastas de armazenamento do Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Expor a porta 80 do contêiner
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]