<?php

use Faker\Generator as Faker;

$factory->define(App\OrderItem::class, function (Faker $faker) {
    $product_name = $faker->word;
    $unit_name = $faker->word;
    return [
        'order_id' => function () {
            return factory(\App\Order::class)->create()->id;
        },
        'product_id' => function () use ($prodcut_name) {
            return factory(\App\Product::class)->create(['name' => $product_name])->id;
        },
        'product_name' => $prodcut_name,
        'unit_id' => function () use ($unit_name) {
            return factory(\App\Unit::class)->create(['name' => $unit_name])->id;
        },
        'unit_name' => $unit_name,
        'price' => $faker->randomNumber(8),
        'quantity' => $faker->randomDigit()
    ];
});
