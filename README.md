# docnt-ngpm
Docker Compose configuration files for [nginx](https://unit.nginx.org/)-[php](https://www.php.net/)-[mariadb](https://mariadb.org/) container

## My Setup

**Phys. Machine**: Notebook, Samsung ATIV Book 9, 8GB RAM  
**OS**: Windows 10 (Home)  
**Docker Toolbox**: [18.03.0-ce](https://github.com/docker/toolbox/releases/tag/v18.03.0-ce) (VirtualBox 5.2.8 r121009, Qt5.6.2)  
  
**nginx**: [1.15.3-alpine](https://github.com/docker-library/repo-info/blob/master/repos/nginx/local/1.15-alpine.md)  
**php**: 7.2-fpm-alpine  
**mariaDB**: 10.3.9  

¯\\\_(ツ)\_/¯

## ToDo (before first time running of `docker-compose`)

change DB Password on `docker/docker-compose.yml`, line 42:

   `MYSQL_PASSWORD=secret`

## see also
my corresponding [Blog-Article](http://mysolutions.blog.lederich.de/2018/10/03/einen-webserver-mit-docker-toolbox-erstellen/) or [Docker Cheat Sheet](https://github.com/dele1972/my-Docker-Cheat-Sheet) and the official [Docker Tools overview](https://docs.docker.com/toolbox/overview/)
  
### Docker Installation (Linux)

1. `sudo apt-get update && sudo apt-get upgrade`
2. `sudo apt install docker docker-compose`
3. `sudo apt autoremove`
   - optional
4. `docker image ls`
   - to check a known failure/bug; if this error occurs `n/docker.sock: connect: permission denied`:

   4.1 `sudo groupadd docker`

   4.2 `sudo usermod -aG docker $USER`
      - add current user to group docker

   4.3 `newgrp docker`

   4.4 `docker image ls`
      - check if the fix works
