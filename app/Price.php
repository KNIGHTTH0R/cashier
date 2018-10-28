<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['product_id', 'unit_id', 'price'];

    protected $casts = [
        'price' => 'decimal'
    ];

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
     * @return $this
     */
    public static function store(array $request)
    {
        return self::create([
          'product_id' => $request['product_id'],
          'unit_id' => $request['unit_id'],
          'price' => $request['price']
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
          'product_id' => $request['product_id'],
          'unit_id' => $request['unit_id'],
          'price' => $request['price']
        ]);
    }
}
