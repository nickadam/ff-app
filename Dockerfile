FROM php:apache

COPY app/ /var/www/html/

RUN >/var/www/html/messages.txt && \
    chown www-data:www-data /var/www/html/messages.txt
