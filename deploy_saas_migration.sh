#!/bin/bash

# Script untuk deployment SaaS dengan data existing
# Jalankan script ini di server production

echo "🚀 Starting SaaS Migration Deployment..."

# 1. Backup Database
echo "📦 Creating database backup..."
BACKUP_FILE="backup_saas_migration_$(date +%Y%m%d_%H%M%S).sql"
mysqldump -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE > $BACKUP_FILE
echo "✅ Database backup created: $BACKUP_FILE"

# 2. Update code
echo "🔄 Updating code..."
git stash
git pull origin main
composer install --no-dev --optimize-autoloader

# 3. Clear caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# 4. Run migrations
echo "📊 Running migrations..."
php artisan migrate --force

# 5. Dry run data migration first
echo "🔍 Performing dry run of data migration..."
php artisan migrate:existing-data --dry-run

echo ""
echo "📋 Dry run completed. Review the output above."
echo "If everything looks good, run the following command to execute the migration:"
echo "php artisan migrate:existing-data"
echo ""
echo "📁 Database backup is available at: $BACKUP_FILE"
echo ""
echo "⚠️  IMPORTANT:"
echo "1. Review dry run output carefully"
echo "2. Make sure backup is successful"
echo "3. Run data migration only if you're confident"
echo "4. Test the application after migration"