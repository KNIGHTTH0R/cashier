<?php

namespace Tests\Unit;

use App\Unit;
use App\Price;
use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Its belongs to many product.
     *
     * @return void
     */
    public function testUnitBelongsToManyProducts()
    {
        $product = factory(Product::class)->create();
        $unit = factory(Unit::class)->create();
        $price = factory(Price::class)->create(['product_id' => $product->id, 'unit_id' => $unit->id]);

        self::assertInstanceOf('Illuminate\Database\Eloquent\Collection', $unit->products);
        self::assertContains($product->name, $unit->products->pluck('name'));
    }
}
