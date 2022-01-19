<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## iPrice Group test assessment

Using object-oriented concepts, create a CLI tool that accepts a string and does the following to it:
- converts the string to uppercase and outputs it to stdout.
- converts the string to alternate upper and lower case and outputs it to stdout.
- creates a CSV file from the string by making each character a column in the CSV and then output  "CSV created!" to stdout.

Setup Laravel
- Requirement:
  - PHP 8.0
  - composer
  - nginx/apache/xampp
- Download from Github and and run cli command below on project folder:-
  - composer install <- This to setup and create library
  - php artisan test <- This to start testing for assemenet
    ![image info](public/test_command.png)
  - Noted: csv file will create in folder storage/app/public/_{timestamp}_.csv
    ![image info](public/result_csv.png)
