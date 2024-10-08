### How to run
- Install docker, docker compose
- `cp .env.example .env`
- `docker-compose up -d`
- `docker exec -it php-laravel /bin/bash`
    - `composer install`
    - `php artisan key:gen`
    - `php artisan migrate`
### How to run API
- Please import file `Event Collection.postman_collection.json` to postman
### How to run view list page on browser
- Please input URL `http://localhost/show-events`