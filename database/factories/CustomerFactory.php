<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->firstName,
        'email'=>$faker->email,
        'company_id'=>$faker->numberBetween(1, 20),
        'dob'=>$faker->date('Y-m-d'),
    ];
});
