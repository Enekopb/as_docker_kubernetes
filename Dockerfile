FROM php:7.2.2-apache
COPY app/ /var/www/html/
RUN docker-php-ext-install mysqli
