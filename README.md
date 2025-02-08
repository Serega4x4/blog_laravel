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
git clone https://github.com/Serega4x4/blog_laravel.git  
cd blog_laravel  
npm install vite@6.0.8 --save-dev && npm run dev  
cp .env.example .env  
php artisan key:generate  
php artisan migrate  
php artisan db:seed  
php artisan serve  
php artisan queue:work  
