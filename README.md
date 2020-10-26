<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About this project

This project was build alongside a course to fully learn the laravel framework

## Technologies used
- Laravel
- MySql
- Xampp
- PhpStorm IDE

## Installing
- Clone repository into your computer
- Open a terminal or shell window in the folder of the project
- Create a ```.env``` file in the root of your folder and insert your database credentials, you can copy [this](https://github.com/laravel/laravel/blob/master/.env.example) template
- Run ```php artisan migrate``` to enable the database tables
- Run ```php artisan serve``` and go to http://127.0.0.1/ in your browser
- If you are using Xampp, clone the project into ``htdocs`` folder
- Go to xampp\apache\conf\extra and modift ```httpd-vhosts``` file to contain the below
```
<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs/instagram-clone/public"
    ServerName lvapp.test
</VirtualHost>
```
- Go to ```C:\Windows\System32\drivers\etc``` open the ```hosts``` file in notepad as administrator or any text editor add the below line at the end
```
127.0.0.1 localhost
127.0.0.1 lvapp.test
```
- Start apache from xampp and go to http://127.0.0.1/

## Functionalities
- Authentication and authorisation
- Post a post which consists of a photo and a description
- Automatically creates a profile upon registration
- Follow other profiles
- See posts of other profiles you are following
- Discover new posts

## Libraries used
- [intervention/image](http://image.intervention.io/) for image editing 
