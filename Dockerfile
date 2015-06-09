FROM czeeb/tonis-docker-nginx

ADD . /srv/www
RUN chown -R www-data:www-data /srv/www

WORKDIR /srv/www
RUN setuser www-data composer install --no-dev -o
RUN setuser www-data bower install --production 
