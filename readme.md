# Laravel Facebook Login
Facebook Login with [Laraval](http://laravel.com/docs/5.7/) using [Socialite](https://laravel.com/docs/5.7/socialite) package.

![Screenshot](https://github.com/SagarMaheshwary/Laravel-Facebook-Login/blob/master/screenshots/laravel-facebook-login-screenshot-1.png)

## Getting this app up and running

- make sure you already have xampp or wamp installed if you are on windows machine, mamp for mac , and lamp for linux.

- clone this repository to your local machine or just download the zip.

- install [Composer](https://getcomposer.org/download) first, then run this command in your command-line (you should be inside your project directory). 
```bash
  composer install
```

- rename .env.example to .env and add your database and facebook 0Auth credentials.

- generate application key.

```bash
    php artisan key:generate
```

- create database tables.

```bash
    php artisan migrate
```

- Facebook login does not work unless we are using HTTPS. You can read complete [tutorial](https://medium.com/@sagarmaheshwary31/facebook-login-with-laravel-and-socialite-e08bdee1268d) on medium where I create this login app as well as HTTPS Virtual host with xampp for Ubuntu/Windows.