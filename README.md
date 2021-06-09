Installation:

Open command terminal using CTRL + `
1. **npm install**
2. **composer install**
3. look for a .env file if there isnt a .env change the name of the .envexample to .env
4. create a database inside phpmyadmin called"supersoccercards"
5. **php artisan migrate**
6. **php artisan php artisan db:seed --class=PlayerSeeder** to enter all the players in the database
7. **php artisan serve** to serve the laravel part
8. **npm run watch** to run the vue
