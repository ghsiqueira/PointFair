# Use the official PHP image as the base image
FROM php:8.1-cli

# Set the working directory
WORKDIR /app

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# Install PHP extensions
RUN docker-php-ext-install zip pdo_mysql mbstring exif pcntl bcmath gd

# Copy the composer.json and composer.lock files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application code
COPY . .

# Generate the optimized autoloader
RUN composer dump-autoload --optimize

# Expose port 8000 (change this to the appropriate port for your application)
EXPOSE 8000

# Start the PHP built-in web server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]