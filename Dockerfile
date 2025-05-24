FROM php:8.1-apache
# Copia tu código a /var/www/html (ajusta la ruta según tu proyecto)
COPY . /var/www/html/cacep/


# docker exec -it CACEP_COREFINANCE_CONTAINER /bin/bash 
EXPOSE 80