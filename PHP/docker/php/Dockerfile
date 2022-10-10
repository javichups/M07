FROM: php:8-fpm-buster

ARG TIMEZONE

COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y git unzip \
    && pecl intall \
        apcu \
        xdebug \
        redis \
    && docker-php-ext-enable \
        apcu \
        xdebug \
        redis

RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime
