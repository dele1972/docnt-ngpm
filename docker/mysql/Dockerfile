# A Dockerfile builds a Docker image - see reference on:
# https://docs.docker.com/engine/reference/builder/

# Builds a MariaDB image
# (supported tags: https://hub.docker.com/_/mariadb/)
#
# For my purpose I will point to explicit versions, which will work with the
# other configured services for this docker-composer configuration; alternative:
#FROM mariadb:latest
FROM mariadb:10.3.9

# set the default command for this container (docker run)
CMD ["mysqld"]

# Let the container listen on port 3306
EXPOSE 3306
