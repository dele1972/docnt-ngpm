# docnt-ngpm
Docker Compose configuration files for [nginx](https://unit.nginx.org/)-[php](https://www.php.net/)-[mariadb](https://mariadb.org/) container

ToDos:
- [ ] Add/mark Optional Service (like phpmyadmin) / Optional Option (addon of a Service)
- [ ] check running mysql and phpmyadmin lonely
- [ ] add ssl
- [ ] add xdebug
- [ ] add phpunit
- [ ] add node
   - [ ] add browser sync
   - [ ] add node-sass
- [ ] add selenium
- [ ] add cypress
- [ ] add python/django (extra project?)

<a name="toc"></a>

## Table of Content
1. [My Setup](#my-setup)
   * [current Hardware](#my-setup_current-hardware)
   * [Services](#my-setup_services)
1. [ToDo (before first time running of `docker-compose`)](#todo-before-first-run)
1. [Services](#services)
   * [mysql](#services_mysql)
   * [Why is the encoding set to `utf8mb4` and not to `UTF-8`?](#services_mysql_why-utf8mb4)
1. [see also](#see-also)
   * [Docker Installation (Linux)](#see-also_docker-installation)
   * [Some command line actions to 'admin'](#see-also_command-line-actions)
     * [docker](#see-also_command-line-actions_docker)
     * [mysql](#see-also_command-line-actions_mysql)
       * [Links](#see-also_command-line-actions_mysql_links)

---
<a name="my-setup"></a>

## My Setup [↸](#toc)

<a name="my-setup_current-hardware"></a>

### current Hardware

| Key | Value |
| --- | --- |
| **Phys. Machine** | Notebook, Samsung ATIV Book 9, 8GB RAM|
| **OS** | Windows 10 (Home) |
| **Docker Toolbox** | [18.03.0-ce](https://github.com/docker/toolbox/releases/tag/v18.03.0-ce) (VirtualBox 5.2.8 r121009, Qt5.6.2) |

<a name="my-setup_services"></a>

### Services

| Service | Docker name | Version | Port |
| --- | --- | --- | --- |
| **nginx** | web | [1.15.3-alpine](https://github.com/docker-library/repo-info/blob/master/repos/nginx/local/1.15-alpine.md) | [80](http://localhost/) |
| **php** | php-fpm | 7.2-fpm-alpine | - |
| **mariaDB** | mysql | 10.3.9 | 3306 |
| **[phpMyAdmin](https://github.com/phpmyadmin/docker)** | phpmyadmin | [5.0.2](https://hub.docker.com/layers/phpmyadmin/phpmyadmin/5.0.2/images/sha256-46dfe47ca8d3a172e7a203049bd33f516b179dc4a7205a88a97ba0bf9fc94c11?context=explore) | [8181](http://localhost:8181) |

¯\\\_(ツ)\_/¯

---
<a name="todo-before-first-run"></a>

## ToDo (before first time running of `docker-compose`) [↸](#toc)

change DB Password on `docker/docker-compose.yml`, line 46:

* `MYSQL_PASSWORD=secret`

---
<a name="services"></a>

## Services [↸](#toc)

* https://docs.docker.com/compose/compose-file/compose-versioning/
* documentation of available keys for service configuration: https://docs.docker.com/compose/compose-file/#service-configuration-reference

<a name="services_mysql"></a>

### mysql

<a name="services_mysql_why-utf8mb4"></a>

#### Why is the encoding set to `utf8mb4` and not to `UTF-8`?

* MySQL decided that UTF-8 can only hold 3 bytes per character (as it's defined as an alias of utf8mb3)
* MySQL 5.5.3 introduced utf8mb4 - 4-byte utf8 encoding
* see: https://www.eversql.com/mysql-utf8-vs-utf8mb4-whats-the-difference-between-utf8-and-utf8mb4/

---
<a name="see-also"></a>

## see also [↸](#toc)

my corresponding [Blog-Article](http://mysolutions.blog.lederich.de/2018/10/03/einen-webserver-mit-docker-toolbox-erstellen/) or [Docker Cheat Sheet](https://github.com/dele1972/my-Docker-Cheat-Sheet) and the official [Docker Tools overview](https://docs.docker.com/toolbox/overview/)

<a name="see-also_docker-installation"></a>

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

<a name="see-also_command-line-actions"></a>

### Some command line actions to 'admin'

<a name="see-also_command-line-actions_docker"></a>

#### docker

| command | comment |
| --- | --- |
| `docker-compose up -d` | **start containers** (as deamon) |
| `docker-compose logs --follow mysql` | **show logs for mysql** service (`--follow` permanently) |
| `docker exec -it docker_mysql_1 bash` | start **mysql bash** (docker) |
| `docker system df` | **List images and containers** |
| `docker ps -aq -f status=exited \| xargs -r docker rm` | **remove all docker container** |
| `docker system prune -a` | **remove** any stopped **containers and all** unused **images** |

<a name="see-also_command-line-actions_mysql"></a>

#### mysql

| command | comment |
| --- | --- |
| `mysql --user=root --password=docker` | open **mariaDB client** |
| `show databases;` | **show** all **databases** |
| `use mysqldb;` | **select a database** |
| `describe tblDockerSample;` | **show table structure** |
| `SELECT * FROM tblDockerSample;` | **show all entries** of table tblDockerSample|

<a name="see-also_command-line-actions_mysql_links"></a>

##### Links

* https://mariadb.com/kb/en/basic-sql-statements/
* https://www.hostwinds.com/guide/how-to-use-mysql-mariadb-from-command-line/
