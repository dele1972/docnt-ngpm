# A Dockerfile builds a Docker image - see reference on:
# https://docs.docker.com/engine/reference/builder/

# Builds a PHP image
# (supported tags: https://hub.docker.com/_/php/)
# (https://github.com/docker-library/php/blob/master/Dockerfile-alpine.template)
#
# For my purpose I will point to explicit versions, which will work with the
# other configured services for this docker-composer configuration
FROM php:7.2-fpm-alpine

# install PHP Core Extension: pdo_mysql
RUN docker-php-ext-install pdo_mysql
#RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

# set the default command for this container (docker run)
CMD ["php-fpm"]

# Let the container listen on port 9000
EXPOSE 9000
