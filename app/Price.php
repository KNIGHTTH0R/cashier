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
}
