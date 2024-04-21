#FashionablyLate

##環境構築
Dockerビルド
docker compose up -d
マイグレーション
docker compose exec php bash
php artisan make:migration create_contacts_table
php artisan make:migration create_categories_table
php artisan make:seeder ContactsTableSeeder
php artisan make:seeder CategoriesTableSeeder

##実行環境
PHP 7.4.9
Laravel 8.83.27
MySQL 8.0.26

##URL
開発環境：http://localhost/
phpMyAdmin：http://localhost:8080
