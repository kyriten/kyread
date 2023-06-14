<table align="center" style="border: none">
 <tr>
    <td>
        <p align="center"><a href="https://github.com/kyriten/kyread"><img src="https://raw.githubusercontent.com/kyriten/kyread/master/kyread-logo.svg" width="400" alt="kyread Logo"></a></p>         </td>
    <td>
        <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
        <p align="center">
            <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
            <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
            <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
            <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
        </p>
     </td>
 </tr>
</table>



## APP SPECIFICATIONS

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

## FEATURES
<ol>
<li>User Authentication</li>
<li>Edit User Profile</li>
<li>Add Product</li>
<li>Show Product</li>
<li>Edit and Update Product</li>
<li>Delete Product</li>
<li>Convenient Use</li>
</ol>

### Next Task
<ol>
<li>Image CRUD</li>
<li>[kyreadSeller] Add Field: category, sale_date, delivery_method, update_stock</li>
<li>[kyreadSeller] Add Transaction</li>
</ol>

## LOCAL INSTALLATION
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


## 

<p align="center"> The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).</p>
