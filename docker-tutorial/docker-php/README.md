# Docker setup LAMP stack (Linux, Apache/NGINX, MySql, Php)
This project aims to set up a Docker container for LAMP stack.
In the `docker-compose.yml`, we install 4 services: 
- apache
- mysql
- adminer
- phpMyAdmin

1. Run `docker-compose up -d` to run the container 
2. In the file `hosts` add `127.0.0.1 docker-php.local.com`
3. Go to `http://docker-php.local.com/`
4. To use adminer, go to `http://localhost:8080/`
    * Server: mysql
    * Username: root
    * Password: root
5. To use PhpMyAdmin, go to `http://localhost:8081/`
   * Server: mysql
   * Username: root
   * Password: root