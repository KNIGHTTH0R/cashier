<?php

namespace Tests\Unit;

use App\Unit;
use App\Price;
use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Its belongs to many units.
     *
     * @return void
     */
    public function testProductBelongsToManyUnits()
    {
        $product = factory(Product::class)->create();
        $unit = factory(Unit::class)->create();
        $price = factory(Price::class)->create(['product_id' => $product->id, 'unit_id' => $unit->id]);

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
        $product = factory(Product::class)->create();
        $price = factory(Price::class)->create(['product_id' => $product->id]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $product->prices);
        self::assertContains($price->toArray(), $product->prices->toArray());
    }

    /**
     * Its can store new product.
     *
     * @return void
     */
    public function testStoreNewProduct()
    {
        $request = [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence
        ];
        $product = Product::store($request);
        $this->assertInstanceOf('App\Product', $product);
        $this->assertDatabaseHas('products', $request);
    }

    /**
     * Its can edit a product.
     *
     * @return void
     */
    public function testEditProduct()
    {
        $request = [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence
        ];
        $product = factory(Product::class)->create();
        $product->edit($request);

        $this->assertInstanceOf('App\Product', $product);
        $this->assertDatabaseHas('products', $request);
    }
}
