<?php

namespace Tests\Unit;

use App\Price;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PriceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Its belongs to product.
     *
     * @return void
     */
    public function testPriceBelongsToProduct()
    {
        $price = factory(Price::class)->create();
        $this->assertInstanceOf('App\Product', $price->product);
    }

    /**
     * Its belongs to unit.
     *
     * @return void
     */
    public function testPriceBelongsToUnit()
    {
        $price = factory(Price::class)->create();
        $this->assertInstanceOf('App\Unit', $price->unit);
    }
}
