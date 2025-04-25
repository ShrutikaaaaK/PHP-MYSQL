
FROM php:8.2-apache

COPY ./PHP-MYSQL-User-Login-System-main/ /var/www/html/

RUN docker-php-ext-install mysqli

EXPOSE 80
