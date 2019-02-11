# Todo
This is web-based checklist/to-do app for employees in sumundi Inc. The app can be used in the company’s intranet and the employees can login and create their checklists for the day, but they need to register first. They can cancel out items on the list as they complete them. They can also create multiple checklists and delete individual checklists. 

# Seting Up

## Install Composer Dependencies
`composer install`

## Install NPM Dependencies
`npm install`

## Create a copy of your .env file
`cp .env.example .env`

## Generate an app encryption key
`php artisan key:generate`

## Create an empty database for our application

## In the .env file, add database information to allow Laravel to connect to the database

`DB_CONNECTION=mysql`<br>
`DB_HOST=127.0.0.1`<br>
`DB_PORT=3306`<br>
`DB_DATABASE=homestead`<br>
`DB_USERNAME=homestead`<br>
`DB_PASSWORD=secret`<br>


## Migrate the database
`php artisan migrate`
