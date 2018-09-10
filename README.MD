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

## env file content
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:35HgRLejtI6RoRcjGH+OJNZIE982NKDNQ0+gVHL0=
APP_DEBUG=true
APP_URL=http://localhost:8666

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=demo
DB_USERNAME=demo
DB_PASSWORD=demo

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

## test
then you can access http://localhost:8666

