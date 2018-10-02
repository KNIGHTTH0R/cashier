<?php

use Faker\Generator as Faker;

$factory->define(App\Price::class, function (Faker $faker) {
    return [
        'product_id' => function() {
            return factory(\App\Product::class)->create()->id;
        },
        'unit_id' => function() {
            return factory(\App\Unit::class)->create()->id;
        },
        'price' => $faker->randomNumber()
    ];
});
