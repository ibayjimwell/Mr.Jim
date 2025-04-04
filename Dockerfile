# Use PHP with FPM
FROM php:8.2-fpm

# Install system dependencies and Node.js
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libjpeg-dev libfreetype6-dev \
    gnupg2 ca-certificates lsb-release libonig-dev libzip-dev zip \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo_mysql gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
RUN npm install && npm run build

# Laravel stuff
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Expose port
EXPOSE 8000

# Start Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
