#!/bin/bash

# Rollback script jika terjadi masalah

echo "⚠️  ROLLBACK SCRIPT - SaaS Migration"
echo "This will restore database from backup"
echo ""

# List available backups
echo "📁 Available backups:"
ls -la backup_saas_migration_*.sql 2>/dev/null || echo "No backups found!"

echo ""
read -p "Enter backup filename to restore (e.g., backup_saas_migration_20240218_120000.sql): " BACKUP_FILE

if [ ! -f "$BACKUP_FILE" ]; then
    echo "❌ Backup file not found: $BACKUP_FILE"
    exit 1
fi

echo "⚠️  WARNING: This will completely replace current database with backup"
read -p "Are you sure? Type 'ROLLBACK' to confirm: " CONFIRM

if [ "$CONFIRM" != "ROLLBACK" ]; then
    echo "❌ Rollback cancelled"
    exit 1
fi

echo "🔄 Restoring database from backup..."

# Drop current database and recreate
mysql -u $DB_USERNAME -p$DB_PASSWORD -e "DROP DATABASE IF EXISTS $DB_DATABASE;"
mysql -u $DB_USERNAME -p$DB_PASSWORD -e "CREATE DATABASE $DB_DATABASE;"

# Restore from backup
mysql -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE < $BACKUP_FILE

echo "✅ Database restored from backup: $BACKUP_FILE"
echo ""
echo "🧹 Clearing application caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear

echo ""
echo "✅ Rollback completed!"
echo "🔍 Please test the application to ensure everything is working"