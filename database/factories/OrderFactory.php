<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    $sub_total = $faker->randomNumber(9);
    $discount = $faker->randomNumber(6);
    $tax = $faker->randomNumber(6);
    $total = $sub_total - $discount + $tax;
    return [
        'number' => $faker->word,
        'customer_id' => function () {
            return factory(\App\Customer::class)->create()->id;
        },
        'total' => $total,
        'sub_total' => $sub_total,
        'discount' => $discount,
        'tax' => $tax
    ];
});
