# A Dockerfile builds a Docker image - see reference on:
# https://docs.docker.com/engine/reference/builder/

# Builds a PHPmyadmin image
# (supported tags: https://hub.docker.com/r/phpmyadmin/phpmyadmin/tags)
# (https://github.com/phpmyadmin/docker)

# @ToDo: should be changed to '5.0.2-fpm-alpine'
# but i come to the problem, that the port won't be mapped correctly
# maybe phpmyadmin didn't use the web and php-fpm service well...

# For my purpose I will point to explicit versions, which will work with the
# other configured services for this docker-composer configuration
FROM phpmyadmin/phpmyadmin:5.0.2
