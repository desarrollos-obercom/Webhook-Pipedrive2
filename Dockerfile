FROM php:8.1-apache
COPY . /var/www/html/
EXPOSE 10000
CMD ["bash", "-c", "apache2-foreground -DFOREGROUND -k start -d /etc/apache2 -f /etc/apache2/apache2.conf -E /dev/stderr -DFOREGROUND -c 'Listen ${PORT}'"]
