<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Meals::class, function (Faker $faker) {
    return [
        
        // 'member_id' => $faker->numberBetween($min = 1, $max = 5),
        // 'month_id'  => $faker->numberBetween($min = 1, $max = 10),
        // 'amount'    =>  $faker->numberBetween($min = 1000, $max = 2000)
    ];
});
