<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Submission::class, function (Faker $faker) {
    return [
        
        'member_id' => $faker->numberBetween($min = 1, $max = 99),
        'amount' =>  $faker->numberBetween($min = 1000, $max = 2000)
    ];
});
