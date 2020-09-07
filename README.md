## Project setup

### Install dependencies by running 
```
composer install
``` 

## Create .env configuration file by running
In windows
```
copy .env.exmple .env
```
In Linux
```
cp .env.exmple .env
```

### Generate application key
```
php artisan key:generate
```

## Create database
#### in your mysql console run command
```
CREATE DATABASE <db_name> CHARACTER SET utf8_mb4 COLLATE utf8mb4_unicode_ci
```

## Set database credentials in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<db_name>
DB_USERNAME=root
DB_PASSWORD=
``` 

## Run migrations
```
php artisan migrate
```

## Serve the application
```
php artisan serve
```

# ENJOY!
