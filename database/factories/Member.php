<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Member::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'email' =>  $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->Address
        
    ];
});
