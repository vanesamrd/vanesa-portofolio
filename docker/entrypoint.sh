#!/bin/sh
set -e

# Default PORT to 8080 if not set
export PORT="${PORT:-8080}"

# Substitute PORT into nginx.conf
envsubst '${PORT}' < /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf

# Setup SQLite database if not present
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Ensure storage & bootstrap permissions
chown -R nobody:nobody /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Run Laravel migrations and cache commands
php artisan migrate --force || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

echo "🚀 Starting Nginx & PHP-FPM on port $PORT..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
