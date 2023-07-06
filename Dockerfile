# Utiliser l'image PHP avec Apache
FROM php:8.2-apache

# Installer l'extension mysqli
RUN docker-php-ext-install mysqli

# Copier les fichiers de l'application dans le conteneur
COPY ./src /var/www/html/

# Exposer le port 80 pour le serveur Apache
EXPOSE 80
