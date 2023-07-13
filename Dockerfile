FROM php:8.0-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy the Apache configuration file with mod_rewrite enabled
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf