<?php

namespace App;

use App\Purchase;
use App\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'stok'];

    /**
     * units
     *
     * @return void
     */
    public function units()
    {
        return $this->belongsToMany(Unit::class, 'prices', 'product_id', 'unit_id');
    }

    /**
     * prices
     *
     * @return void
     */
    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    /**
     * purchases
     *
     * @return void
     */
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    /**
     * order_items
     *
     * @return void
     */
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * stok
     *
     * @return int
     */
    public function getStokAttribute($value)
    {
        return $value ?: $this->purchases->sum('quantity') - $this->order_items->sum('quantity');
    }

    /**
     * options
     *
     * @return void
     */
    public static function options()
    {
        return self::all()->pluck('name', 'id');
    }

    /**
     * store
     *
     * @param array $request
     * @return void
     */
    public static function store(array $request)
    {
        return self::create([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
    }

    /**
     * edit
     *
     * @param array $request
     * @return void
     */
    public function edit(array $request)
    {
        return $this->update([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
    }

    /**
     * price
     *
     * @param mixed $unit_id
     * @return void
     */
    public function price($unit_id)
    {
        return $this->prices->where('unit_id', $unit_id)->first()->price;
    }
}
