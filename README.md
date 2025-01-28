# Laravel Blog Project

## Description
This project is a Laravel-based web application designed to demonstrate API integration, data storage in a MySQL database, and access to an admin panel using AdminLTE.

### Technologies and Dependencies
PHP: 8.3.11  
Laravel Framework: 11.38.2  
Laravel UI: for generating basic templates and authentication  
Bootstrap: for styling the interface  
AdminLTE: 3: integration of the admin panel  
Doctrine DBAL: for handling database schema changes  
Vite: for building the frontend  

### Installation
sudo apt install php  
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  
php composer-setup.php  
composer create-project laravel/laravel blog  
composer require laravel/ui  
php artisan ui bootstrap  
php artisan ui:auth  
npm install vite@6.0.8 --save-dev && npm run dev  
composer require doctrine/dbal  
