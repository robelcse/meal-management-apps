<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Month::class, function (Faker $faker) {
    return [
        
        'month' =>'01-01-2021',
    ];
});
