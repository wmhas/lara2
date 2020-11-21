php artisan make:model -m Customer

//create record
$c = Company::create(['name'=>'abc com', 'phone'=>'123-12-2233']);
php artisan migrate
php artisan migrate:rollback / fresh
php artisan tinker
php artisan make:factory -m Company

factory(\App\customer::class, 50)->create();
>>> use App\Customer;
=> null
>>> factory(User::class, 5)->create();

User::all()->pluck('name');


laravel telescope
composer require laravel/telescope
php artisan telescope:install
php artisan telescope:publish


//factory
php artisan make:factory CompanyFactory -m Company
php artisan make:factory CustomerFactory -m Customer

factory(\App\Company::class) ->create();
factory(\App\Company::class, 10) ->create();
Company::all()
$c= Customer::with('company')->get();
$c=Customer::with('company')->find(1);
$c=Customer::first();
$c=Customer::with('company')->first()/find(xx-id);


dd($c->toArray())

//faker
$faker->unique(true)->numberBetween(1, 50)


