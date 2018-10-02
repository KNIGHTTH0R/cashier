<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['product_id', 'unit_id', 'price'];

    protected $casts = [
        'price' => 'decimal'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }
}
