URL Shortener – Laravel 10
<p align="center"> <a href="https://laravel.com" target="_blank"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"> </a> </p> <p align="center"> <a href="#"><img src="https://img.shields.io/badge/Build-Passing-brightgreen" alt="Build Status"></a> <a href="#"><img src="https://img.shields.io/badge/Downloads-1K%2B-blue" alt="Downloads"></a> <a href="#"><img src="https://img.shields.io/badge/Version-1.0.0-success" alt="Version"></a> <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-lightgrey" alt="License"></a> </p>
About This Project

URL Shortener is a simple yet powerful web application built with Laravel 10 and Bootstrap 5.
It allows users to generate short, shareable URLs that instantly redirect to long original URLs.

This is a perfect beginner-friendly Laravel project that demonstrates:

Routing (GET, POST)

Controllers & Models

Eloquent ORM

Middleware

Database migrations

Blade templating

Bootstrap UI integration

Features

📝 Simple clean UI using Bootstrap

🔗 Shorten any long URL

🎯 Auto-generated unique 6-character short code

⚡ Instant redirection to the original URL

💾 Stored in MySQL database

🔐 Validation for valid URL

🚀 Fast and lightweight

Installation

Follow these steps to install the project:

1. Clone the repository
git clone https://github.com/your-username/url-shortener.git
cd url-shortener

2. Install Composer dependencies
composer install

3. Create environment file
cp .env.example .env

4. Generate Laravel app key
php artisan key:generate

Database Configuration

Edit your .env file and update:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=url_shortener
DB_USERNAME=root
DB_PASSWORD=


Now run migrations:

php artisan migrate

Running the Application

Start the Laravel development server:

php artisan serve


Application will run at:

http://127.0.0.1:8000

How It Works
Step 1 — Enter a long URL

On the home page (/), there is a simple form where the user enters a URL.

Step 2 — Process URL

The app generates a unique short code using:

Str::random(6)

Step 3 — Store it

The URL and short code are stored in the database.

Step 4 — Redirect

Visiting:

http://127.0.0.1:8000/Ab12Cd


automatically redirects the user to the original URL.

Project Structure
app/
 ├── Http/
 │    └── Controllers/
 │          └── UrlController.php
 ├── Models/
 │    └── Url.php
database/
 └── migrations/
public/
resources/
 └── views/
      └── welcome.blade.php
routes/
 └── web.php

Routes
Method	URI	Description
GET	/	Show home page with URL form
POST	/shorten	Generate shortened URL
GET	/{shortCode}	Redirect to original URL
Learning Laravel

Laravel is known for its expressive syntax, powerful features, and excellent documentation.
You can explore more here:

Official Docs: https://laravel.com/docs

Laravel For Beginners: https://laravel.com/learn

Laracasts Videos: https://laracasts.com

Screenshots (Optional)

You can add images later:

/screenshots/homepage.png
/screenshots/result.png

Contributing

Pull requests are welcome.
For major changes, please open an issue first to discuss what you would like to change.

Security Vulnerabilities

If you discover any security issue in this repository, please report it privately to the maintainer.

License

This project is open-sourced software licensed under the MIT License
.

Author

Md Maskur Alam
B.Tech CSIT (2022–2026)
MIET, Meerut (AKTU)