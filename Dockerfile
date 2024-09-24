# Use the official PHP image
FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html    

# Copy the application files to the container
COPY . .

# Copy the .env file
COPY .env.example .env

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Create the SQLite database file
RUN touch /var/www/html/database/database.sqlite

# Set the correct permissions for the database directory
RUN chown -R www-data:www-data /var/www/html/database

# Generate application key
RUN php artisan key:generate --no-interaction

# Run migrations to create the necessary tables
RUN php artisan migrate --force

# Clear the configuration cache
RUN php artisan config:clear

# Set the correct permissions for storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]