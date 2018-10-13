<?php

namespace Tests\Unit;

use App\Unit;
use App\Order;
use App\Price;
use App\Product;
use App\Customer;
use App\OrderItem;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOrderHasManyItems()
    {
        $order = factory(Order::class)->create();
        $item = factory(OrderItem::class)->create(['order_id' => $order->id]);

        $this->assertContains($item->toArray(), $order->order_items->toArray());
    }

    /**
     * testStoreNewOrder
     *
     * @return void
     */
    public function testStoreNewOrder()
    {
        $product = factory(Product::class)->create();
        $unit = factory(Unit::class)->create();

        $price = $this->faker->randomNumber(9);
        $product->prices()->create([
          'unit_id' => $unit->id,
          'price' => $price
        ]);
        $tax = $this->faker->randomNumber(6);
        $discount = $this->faker->randomNumber(6);

        $request = [
          'number' => $this->faker->word,
          'customer_id' => 1,
          'tax' => $tax,
          'discount' => $discount,
          'items' => [
            [
              'product_id' => $product->id,
              'unit_id' => $unit->id,
              'quantity' => 2
            ]
          ]
        ];
        $order = Order::store($request);

        $this->assertInstanceOf('App\Order', $order);
        $this->assertEquals($order->total, $price * 2 - $discount + $tax);
    }
}
