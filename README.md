## HOW TO RUN PROJECT LOCAL

make sure you have php 9 +

1. open project directory  , 
2. run "npm install"
3. run "composer install"
4. create database sales_app in MySQL (my MySQL credentials are user:root, pwd:'' , localhost) you can also change these details in .env file
5. run "php artisan migrate --seed"
6. run "npm run dev"
7. run "php artisan serve"