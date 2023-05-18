<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

# Laravel News Crawler

This project is a Laravel web crawler that runs on guzzle http and utilizes Google Search to get the latest news items for a particular topic.

## Prerequisites

-   Composer
-   PHP (check composer.json for version)

## Installation

1. Clone the repository:

git clone https://github.com/okonueugene/newsapi.git

2. Install the dependencies:

    composer install

3. Generate the application key:

    php artisan key:generate

4. Clear the configuration and view caches:

    php artisan config:clear
    php artisan view:clear

5. Compile the assets:

    php artisan asset:publish

6. Run the application:
   php artisan serve

The application will be running on http://localhost:8000.

## Usage

To get the latest news items for a particular topic, simply send a GET request to the following URL:

localhost:8000/api/news

The request can be customized by adding the following query parameters:

-   `q`: The search query.
-   `page`: The page number.
-   `per_page`: The number of news items per page.

## Dependencies

This project depends on the following libraries:

-   Laravel
-   Guzzle HTTP
-   Google Search API

## Documentation

The project does not have documentation yet.

I hope this helps!
