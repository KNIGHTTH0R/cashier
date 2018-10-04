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
    use RefreshDatabase, WithFaker;

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

    /**
     * testStoreNewUnit
     *
     * @return void
     */
    public function testStoreNewUnit()
    {
        $request = [
          'name' => $this->faker->word
        ];
        $unit = Unit::store($request);
        $this->assertDatabaseHas('units', $request);
    }

    /**
     * testEditUnit
     *
     * @return void
     */
    public function testEditUnit()
    {
        $request = [
          'name' => $this->faker->word
        ];
        $unit = factory(Unit::class)->create();
        $unit->edit($request);

        $this->assertDatabaseHas('units', $request);
    }
}
