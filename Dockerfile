FROM php:8.2-apache

# Enable Apache headers module for CORS
RUN a2enmod headers expires

# Copy all project files
COPY . /var/www/html/

# Apache config: serve .lua as plain text + enable CORS for executors
RUN echo '\n\
<Directory /var/www/html>\n\
    Options -Indexes\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
\n\
# Serve Lua files as plain text\n\
AddType text/plain .lua\n\
\n\
# CORS headers — Roblox executors need these\n\
Header always set Access-Control-Allow-Origin "*"\n\
Header always set Access-Control-Allow-Methods "GET"\n\
Header always set Cache-Control "no-cache, must-revalidate"\n\
' >> /etc/apache2/apache2.conf

EXPOSE 80
