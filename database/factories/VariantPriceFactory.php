<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use App\Models\Variant;
use App\Models\VariantPrice;
use Faker\Generator as Faker;

$factory->define(VariantPrice::class, function (Faker $faker) {
    return [
        "country_id"=> Country::all()->random()->id,
        "variant_id"=> Variant::all()->random()->id,
        "price"=> $faker->numberBetween($min = 10, $max = 100000) ,
    ];
});
