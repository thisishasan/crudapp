# Use an official PHP runtime as a parent image
FROM php:8.3.0-apache

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd bcmath mysqli

# Install Nano Editor
RUN apt-get -y install nano

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP application code into the container
COPY ./application/ .

RUN a2enmod rewrite

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]