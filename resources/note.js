php artisan make:model -m Customer
php artisan migrate
php artisan migrate:rollback
php artisan tinker
php artisan make:factory -m Company

factory(\App\customer::class, 50)->create();
>>> use App\Customer;
=> null
>>> factory(User::class, 5)->create();

User::all()->pluck('name');

laravel telescope
php artisan telescope:install
php artisan telescope:publish