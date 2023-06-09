<div class="row">
    <div class="col">
        <p align="center"><a href="https://github.com/kyriten/kyread"><img src="https://raw.githubusercontent.com/kyriten/kyread/master/kyread-logo.svg" width="400" alt="kyread Logo"></a></p> 
    </div>
    <div class="col">
        <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
    </div>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Manual Guide to Fork Repo

A mini e-marketplace for bookstore. So here are the specifications of the application:
<ol>
<li>App Name: kyread</li>
<li>DB Name: db_kyread</li>
<li>PHP Version: 8.2.0</li>
<li>Laravel Version: 10.13.0</li>
<li>Bootstrap Version: 5.3.0</li>
<li>MDB Version: 6.3.1</li>
<li>Dashboard Template: <a href="https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/">NiceAdmin by Bootstrapmade (Last updated: May 30, 2023)</a></li>
</ol>
  
  Do this for access this project at your computer:

### 1. Add vendor <br>
Just run this command in your project without tick(') symbol: 
<br>
'composer install'

### 2. Add .env file
<ol>
<li>Download the standard env.example file from the Laravel source code.</li>
<li>Rename it to .env and edit it.</li>
<li>Just set up correct DB credentials, etc.</li>
<li>Don't forget to run the php artisan key:generate command.</li>
<li>It will generate an application (encryption) key and add it to the .env file.</li>
</ol>

### 3. Create Database
Create database name 'db_kyread' it's possible to custom with yours, but equate it to the db that in the .env file. 

### 4. Migrate
Don't forget to migrate your database.



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
