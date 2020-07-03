# A Dockerfile builds a Docker image - see reference on:
# https://docs.docker.com/engine/reference/builder/

# Builds a nginx image
# (supported tags: https://hub.docker.com/_/nginx/)
#
# For my purpose I will point to explicit versions, which will work with the
# other configured services for this docker-composer configuration; alternative:
#FROM nginx:alpine
FROM nginx:1.15.3-alpine

# set the default command for this container (docker run)
CMD ["nginx"]

# Let the container listen on port 80 and 443
EXPOSE "80" "443"
# EXPOSE "9001"
