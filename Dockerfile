# Dockerfile

# Base image
FROM php:8.2

# Instal dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git

# Instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set direktori kerja
WORKDIR /var/www/html

# Menyalin file composer.json dan composer.lock
COPY composer.json composer.lock ./

# Install dependensi menggunakan Composer
RUN composer install --no-scripts --no-autoloader

# Menyalin seluruh kode sumber proyek
COPY . .

# Generate autoload file
RUN composer dump-autoload --no-scripts --no-dev --optimize

# Menjalankan perintah lain yang diperlukan untuk proyek Laravel
RUN php artisan key:generate
RUN php artisan migrate

# Menjalankan server web
CMD php artisan serve --host=0.0.0.0 --port=8000

# Expose port
EXPOSE 8000
