# Use uma imagem base com suporte ao PHP e ao Laravel
FROM php:7.4-apache

# Diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o contêiner
COPY . /var/www/html

# Instalar as dependências do PHP necessárias
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip && \
    docker-php-ext-install pdo_mysql zip && \
    a2enmod rewrite

# Copiar o arquivo de configuração do Apache para habilitar o mod_rewrite
COPY apache2.conf /etc/apache2/apache2.conf

# Configurar as variáveis de ambiente necessárias para o Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV APP_ENV=production
ENV APP_KEY=base64:Dv1+sJ+FiPOoBT0hD5eCv5ipjcYuLSb1lslCpW2Qj5c=
# ENV DB_CONNECTION=mysql
# ENV DB_HOST=your-db-host
# ENV DB_PORT=3306
# ENV DB_DATABASE=your-db-name
# ENV DB_USERNAME=your-db-username
# ENV DB_PASSWORD=your-db-password

# Executar comandos adicionais do Laravel, se necessário
#aqui

# Configurar as permissões corretas nos arquivos do Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expor a porta 80 para acessar o aplicativo Laravel
EXPOSE 80

# Comando de inicialização para iniciar o Apache
CMD ["apache2-foreground"]