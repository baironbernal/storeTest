<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Variant;
use Faker\Generator as Faker;



$factory->define(Variant::class, function (Faker $faker) {
    $productRandom = Product::all()->random(1);
    return [
        "name"=> $faker->name,
        "description"=> $faker->text,
        "ref"=> $faker->numberBetween($min = 10, $max = 100) ,
        "color" => $faker->name,
        "product_id" => $productRandom[0]->id,
    ];
});
