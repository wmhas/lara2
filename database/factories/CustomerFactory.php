<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->firstName,
        'email'=>$faker->unique()->safeEmail,
       // 'company_id'=>$faker->numberBetween(1, 20),
        'dob'=>$faker->date('Y-m-d'),
        'company_id'=>factory(Company::class)->create()
    ];
});
