# Usa la imagen oficial de WordPress con PHP y Apache
FROM wordpress:latest

# Copia todos los archivos de tu proyecto al contenedor
COPY . /var/www/html

# Asegúrate de que Apache sirva desde la raíz
WORKDIR /var/www/html

# Exponemos el puerto 80 para HTTP
EXPOSE 80

# Comando para levantar Apache en primer plano
CMD ["apache2-foreground"]

