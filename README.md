composer install
php composer run-script post-root-package-install
php composer run-script post-create-project-cmd 
touch database/database.sqlite
php artisan migrate --seed
php artisan serve

login: admin@admin.admin
password: admin
