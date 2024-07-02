# St Sedge Product

## Requirements
- PHP >= 8.2
- Node >= v20.13.1
## Usage
- In root path project, run command:
``` bash
 npm install
 npm run prepare

 - Create .env file, copy content from .env.example to .env file and config your database in .env:
``` bash
APP_DEBUG=false
APP_URL=domain
DB_CONNECTION=mysql
DB_HOST=database_server_ip
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```
- Run

``` bash
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed --class=DatabaseSeeder
php artisan storage:link
php artisan route:clear
php artisan config:clear
	
```
- Local development server run

``` bash
php artisan serve
```
