<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['order_id', 'product_id', 'unit_id', 'price', 'quantity'];

    /**
     * order
     *
     * @return void
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * product
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * unit
     *
     * @return void
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
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
          'order_id' => $request['order_id'],
          'product_id' => $request['product_id'],
          'unit_id' => $request['unit_id'],
          'quantity' => $request['quantity'],
          'price' => $request['price'],
        ]);
    }
}
