# Laravel Blog Project

## Description:
This project is a Laravel framework web application, data storage in a SQLite database, and access to an admin panel using AdminLTE.

### Technologies and Dependencies:
PHP: 8.3.11  
Laravel Framework: 11.38.2  
Laravel UI: for generating basic templates and authentication  
Bootstrap: for styling the interface  
AdminLTE: 3: integration of the admin panel  
Doctrine DBAL: for handling database schema changes  
Vite: for building the frontend  
MailTrap: for sending messages to clients

### Installation:
sudo apt update  
sudo apt install php8.3.11  
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  
php composer-setup.php  
composer create-project laravel/laravel blog  11.38.2  
composer require laravel/ui  
php artisan ui bootstrap --auth  
php artisan ui bootstrap  
php artisan ui:auth  
npm install vite@6.0.8 --save-dev && npm run dev  
composer require doctrine/dbal  
