# Usa la imagen oficial de WordPress
FROM wordpress:latest

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Elimina archivos por defecto (opcional, pero evita duplicados)
RUN rm -rf wp-content

# Copia solo tu contenido personalizado (temas, plugins, uploads)
COPY wp-content ./wp-content

# Copia tu archivo wp-config.php si lo tienes adaptado a variables de entorno
COPY wp-config.php ./wp-config.php

# Asegura permisos correctos (muy importante)
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto
EXPOSE 80
