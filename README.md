<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

1. cp .env.example .env
2. composer install
3. php artisan migrate:refresh --seed
4. php artisan jwt:generate
5. php artisan serve

## route
1. route for login : localhost:8000/api/auth/login
2. route for register : localhost:8000/api/auth/register
3. route for get laporan 1 with pagination : localhost:8000/api/laporan-1 
4. route for get laporan 2 with pagination : localhost:8000/api/laporan-2 
