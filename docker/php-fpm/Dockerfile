## A Dockerfile builds a Docker image - see reference on:
## https://docs.docker.com/engine/reference/builder/

## Builds a PHP image
## (supported tags: https://hub.docker.com/_/php/)
## (https://github.com/docker-library/php/blob/master/Dockerfile-alpine.template)
##
## For my purpose I will point to explicit versions, which will work with the
## other configured services for this docker-composer configuration
FROM php:7.2-fpm-alpine

## install PHP Core Extension: pdo_mysql
RUN docker-php-ext-install pdo_mysql

#RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql


## set an ARG Variable with a default value, will be overwritten by docker-compose.yml
ARG WITH_XDEBUG=false

RUN if [ $WITH_XDEBUG = "true" ] ; then \
        apk add --no-cache $PHPIZE_DEPS; \
        pecl install xdebug-2.9.6; \
        echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        ## host.docker.internal isn't available for docker on linux/ubuntu
        echo "xdebug.remote_host=" $(ip route show | awk '/default/ {print $3}') >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        # echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.remote_connect_back=off" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        docker-php-ext-enable xdebug; \
\
        ## optional settings
        # echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini; \
        # echo "xdebug.idekey = DEBUGIT" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        # echo "xdebug.remote_log = /var/log/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
 \
        ## if you want debugging, then these php.ini settings will help too
        echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/php.ini; \
        echo "display_startup_errors=on" >> /usr/local/etc/php/conf.d/php.ini; \
        echo "display_errors=on" >> /usr/local/etc/php/conf.d/php.ini; \
   fi ;


# set the default command for this container (docker run)
CMD ["php-fpm"]
