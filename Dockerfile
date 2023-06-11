FROM php:8.1-apache

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql mysqli pgsql \
    && docker-php-ext-enable pdo_mysql pdo_pgsql mysqli pgsql

COPY . /var/www/html/