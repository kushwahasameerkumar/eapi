<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\product;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(10,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30),
    ];
});
