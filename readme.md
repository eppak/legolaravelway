# Laravel the Lego Way
> Code base for a talk at [Italian Laravel Day 2019](https://2019.laravelday.it/)

Base installation:
```sh
$ cd server
$ composer install
$ cp ../env/laravel_docker_env .env
$ php artisan key:generate
$ php artisan migrate:fresh --seed
```
Then follow the official documentation for every headless cms.

| Name | Documentation |
| ------ | ------ |
| Laravel Nova | https://nova.laravel.com/docs/2.0/installation.html#installing-nova|
| Laravel Backpack | https://backpackforlaravel.com/docs/4.0/introduction |

# License
Nova and Backpack trademarks are owned by the respective creators, source code not included.
