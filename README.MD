# Laravel

## init skeleton 

run this command to build and up docker container
```
composer create-project galaxywork/laravel your_application_dir dev-master --prefer-dist
```

enter your_application_dir/app and run this command

```
composer install
```

enter your_application_dir and run this command to build and up docker container
```
docker-compose build
docker-compose up -d
```

## auto build models
run this command auto build models
```
docker-compose exec app php artisan code:models
```

then you can access http://localhost:8666

