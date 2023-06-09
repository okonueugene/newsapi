# Laravel News Crawler

This project is a Laravel web crawler that runs on guzzle http and utilizes Google Search to get the latest news items for a particular topic.

## Prerequisites

-   Composer
-   PHP (check composer.json for version)

## Installation

1. Clone the repository:

    git clone https://github.com/okonueugene/newsapi.git

    cd /newsapi

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

-   `searchQuery`: The search query.
-   `topic`: The targeted filed of scope of the news.
-   `location`: The locale, region or continent where the news if from.

## Dependencies

This project depends on the following libraries:

-   Laravel
-   Guzzle HTTP
-   Google Search API

## Documentation

The project does not have documentation yet.

I hope this helps!
