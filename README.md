# api-xsis
Movies API using Laravel 9

# How to run

1. clone repo with git clone
2. cd api-xsis
3. composer install
4. php artisan migrate
6. update file .env 
7. run => php artisan serve

# API Endpoints

1. http://127.0.0.1:8000/api/movies [GET] - Get List Movies
2. http://127.0.0.1:8000/api/movies [POST] - Add Movies
3. http://127.0.0.1:8000/api/movies/[id] [GET] - Get Movies Detail
4. http://127.0.0.1:8000/api/movies/[id] [DELETE] - Delete Movies