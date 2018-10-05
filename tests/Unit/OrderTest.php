<?php

namespace Tests\Unit;

use App\Order;
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
        dd($order->toArray());
    }
}
