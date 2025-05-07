FROM php:8.2-fpm

# Install dependensi sistem
RUN apt-get update && apt-get install -y libzip-dev unzip git && docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Lingkup file
WORKDIR /var/www/html

COPY . .

RUN composer install --no-scripts --no-autoloader
RUN composer dump-autoload
RUN php artisan clear-compiled
RUN php artisan optimize

# RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
