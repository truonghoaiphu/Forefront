### How to run
- Install docker, docker compose
- `cp .env.example .env`
- `docker-compose up -d`
- `docker exec -it php-fpm /bin/bash`
    - `composer install`
    - `php artisan key:gen`
    - `php artisan migrate`