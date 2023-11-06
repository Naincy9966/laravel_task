# Use an official PHP runtime as a parent image
FROM php:8-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql zip

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the Laravel application files to the working directory
COPY . .

# Install Composer (PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install

# Expose the port your application will run on (Apache default is 80)
EXPOSE 80

# Define the command to run your application (start Apache)
CMD ["apache2-foreground"]
