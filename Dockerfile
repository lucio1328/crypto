FROM php:8.2-fpm

# Installez les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

# Installez Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Téléchargez le script wait-for-it.sh pour attendre PostgreSQL
ADD https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh /usr/local/bin/wait-for-it
RUN chmod +x /usr/local/bin/wait-for-it

# Copiez le code source dans le conteneur
WORKDIR /var/www/html
COPY . .

# Configurez les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exécutez les migrations après que PostgreSQL soit prêt
CMD wait-for-it postgres:5432 --timeout=30 --strict -- php artisan migrate --force && php-fpm
