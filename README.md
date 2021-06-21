Installation:

Open command terminal using CTRL + `
1. **npm install**
2. **composer install**
3. look for a .env file if there isnt a .env change the name of the .envexample to .env
4. create a database inside phpmyadmin called"supersoccercards"
5. **php artisan migrate**
6. **php artisan db:seed --class=PlayerSeeder** to enter all the players in the database
7. **php artisan db:seed --class=UserTestSeeder** to enter a dummy user in the database
8. **php artisan serve** to serve the laravel part
9. **npm run watch** to run the vue
10. **make sure you have generated a key using: php artisan key:generate** to run php artisan serve
11. **make sure your antivirus does NOT delete the server.php file!!!** to be able to run php artisan serve
