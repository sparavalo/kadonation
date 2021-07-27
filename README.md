# Kadonation Laravel


### Minimum requirements:
``` PHP >= 8 ```
``` Composer >= 2 ```

### Installation:

Download the code on your local env.
Install the dependencies
```sh
composer install

./vendor/bin/sail install

cp .env.example .env

php artisan key:generate

./vendor/bin/sail up

./vendor/bin/sail artisan migrate --seed
```

### API:

Import [Postman collection](https://easyupload.io/ie0zh0) to your local postman and use endpoints

