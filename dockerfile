FROM php:7.4-apache

RUN apt-get update
COPY index.php /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 774 /var/www/html
