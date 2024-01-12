FROM php:8.2-fpm

LABEL maintainer="ACorp<admin@afriz.ru>"

RUN apt-get update && apt-get install -y \
    curl \
    wget \
    git \
    libmcrypt-dev \
    libonig-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    gettext

RUN docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip gd gettext
RUN pecl install mcrypt-1.0.6 && docker-php-ext-enable mcrypt
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
WORKDIR /var/www
CMD ["php-fpm"]