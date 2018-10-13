<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['product_id', 'unit_id', 'suplier_id', 'quantity', 'price', 'total_price'];

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
     * suplier
     *
     * @return void
     */
    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
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
          'product_id' => $request['product_id'],
          'unit_id' => $request['unit_id'],
          'price' => $request['price'],
          'quantity' => $request['quantity'],
          'total_price' => $request['price'] * $request['quantity']
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
          'price' => $request['price'],
          'quantity' => $request['quantity'],
          'total_price' => $request['price'] * $request['quantity']
        ]);
    }

    /**
     * getSuplierNameAttribute
     *
     * @return string
     */
    public function getSuplierNameAttribute()
    {
        return optional($this->suplier)->name ?: '-';
    }
}
