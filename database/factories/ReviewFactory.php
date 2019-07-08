<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\product;
use App\Models\review;
use Faker\Generator as Faker;

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        //
        'product_id' => function(){
            return product::all()->random();
        },
        'star' => $faker->numberBetween(1,5),
        'customer' => $faker->name,
        'review' => $faker->paragraph
    ];
});
