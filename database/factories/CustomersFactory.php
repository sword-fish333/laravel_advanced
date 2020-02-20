<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'name'=>$faker->name,
        'active'=>random_int(0,1)
    ];
});
