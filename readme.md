# Laravel the Lego Way
> Code base for a talk at [Italian Laravel Day 2019](https://2019.laravelday.it/)
> You can find the video here: [Alessandro Cappellozza - Laravel the Lego™ Way - laravelday 2019
](https://www.youtube.com/watch?v=pgxJFOHqLxU)

Base installation:
```sh
$ cd server
$ composer install
$ cp ../env/laravel_docker_env .env
$ php artisan key:generate
$ php artisan migrate:fresh --seed
```
Then follow the official documentation for every headless cms.
You can switch between the two jeadless cms using different branch: master = business logig only, nova = Laravel Nova, backpack = Laravel Backpack

| Name | Documentation |
| ------ | ------ |
| Laravel Nova | https://nova.laravel.com/docs/2.0/installation.html#installing-nova|
| Laravel Backpack | https://backpackforlaravel.com/docs/4.0/introduction |

# License
Nova and Backpack trademarks are owned by the respective creators, source code not included.
