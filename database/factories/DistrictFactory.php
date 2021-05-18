<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        //
        'districtname' =>$faker->state
    ];
});
