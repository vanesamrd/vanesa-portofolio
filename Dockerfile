FROM php:8.3-fpm-alpine

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    gettext \
    libzip-dev \
    sqlite-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_sqlite \
        pcntl \
        bcmath \
        zip \
        opcache \
        gd \
        mbstring

# Copy composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies without dev packages
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Prepare Nginx & Supervisor configuration
COPY docker/nginx.conf.template /etc/nginx/nginx.conf.template
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Setup directories and permissions
RUN mkdir -p /var/log/supervisor /var/log/nginx /run \
    && chown -R nobody:nobody /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 8080

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
