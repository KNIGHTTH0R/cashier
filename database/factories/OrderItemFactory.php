<?php

use Faker\Generator as Faker;

$factory->define(App\OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => function () {
            return factory(\App\Order::class)->create()->id;
        },
        'product_id' => function () {
            return factory(\App\Product::class)->create()->id;
        },
        'unit_id' => function () {
            return factory(\App\Unit::class)->create()->id;
        },
        'price' => $faker->randomNumber(8),
        'quantity' => $faker->randomDigit()
    ];
});
