FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
        libicu-dev libxslt-dev libzip-dev \
    && docker-php-ext-install xsl pdo_mysql mbstring intl pcntl zip
RUN docker-php-ext-configure pcntl --enable-pcntl
RUN apt-get install -y git
RUN apt-get install -y unzip

# Only DEV mode
RUN pecl install xdebug && docker-php-ext-enable xdebug
# ------------

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer