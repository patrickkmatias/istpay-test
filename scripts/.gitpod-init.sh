#!/bin/bash
# Create "jobseeker_db" database as root user
mysql -u root -e "create database jobseeker_db"

# Clone .env file
cp .env.example .env

# Change APP_URL var. to Gitpod's workspace URL
sed -i "s|APP_URL=|APP_URL=${GITPOD_WORKSPACE_URL}|g" .env
sed -i "s|APP_URL=https://|APP_URL=https://8000-|g" .env

# Install dependencies
npm install
composer install

# Generate app key
php artisan key:generate

# Run others .gitpod.yml scripts
gp sync-done dependencies