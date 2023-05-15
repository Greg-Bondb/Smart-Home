FROM php:8.0-apache
COPY rfid-website /var/www/html/
RUN docker-php-ext-install pdo_mysql
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod rewrite && \
    a2dissite 000-default && \
    a2ensite 000-default && \
    service apache2 restart



# RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ && docker-php-ext-install gd
# RUN apt-get install -y libmcached-dev zlib1g-dev &&
#     pecl install memcached-3.1.5 &&
#     docker-php-ext-enable memcached