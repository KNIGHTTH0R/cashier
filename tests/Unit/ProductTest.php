<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Its belongs to many units.
     *
     * @return void
     */
    public function testProductBelongsToManyUnits()
    {
        $product = factory(\App\Product::class)->create();
        $unit = factory(\App\Unit::class)->create();
        $price = factory(\App\Price::class)->create(['product_id' => $product->id, 'unit_id' => $unit->id]);

        self::assertInstanceOf('Illuminate\Database\Eloquent\Collection', $product->units);
        self::assertContains($unit->name, $product->units->pluck('name'));
    }

    /**
     * Its has many prices.
     *
     * @return void
     */
    public function testProductHasManyPrices()
    {
        $product = factory(\App\Product::class)->create();
        $price = factory(\App\Price::class)->create(['product_id' => $product->id]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $product->prices);
        self::assertContains($price->toArray(), $product->prices->toArray());
    }
}
