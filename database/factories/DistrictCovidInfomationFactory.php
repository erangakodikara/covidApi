<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\District;
use App\Model\DistrictCovidInfomation;
use Faker\Generator as Faker;

$factory->define(DistrictCovidInfomation::class, function (Faker $faker) {
    return [
        //
        'district_id' => factory(District::class),
        
    ];
});
