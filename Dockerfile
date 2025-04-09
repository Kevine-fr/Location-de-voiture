FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \
    git \
    unzip \
    curl \
    gnupg2 \
    lsb-release \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Installer Node.js (via NodeSource)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
COPY . .

# Installer les dépendances PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Installer les dépendances npm si package.json présent
RUN if [ -f package.json ]; then npm install; fi

EXPOSE 8000 5173

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]