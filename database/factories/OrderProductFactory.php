<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderProduct;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1, 50),
        'order_id' => $faker->numberBetween(1, 40),
        'quantity' => $faker->numberBetween(10, 100)
    ];
});
