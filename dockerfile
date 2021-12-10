FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
WORKDIR /var/www/html
COPY . /var/www/html/
EXPOSE 80
RUN chown -R www-data:www-data /var/www