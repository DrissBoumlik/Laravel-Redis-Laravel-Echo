<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'name' => $faker->name(),
        'price' => $faker->numberBetween(20, 1000),
        'quantity' => $faker->numberBetween(10, 100)
    ];
});
