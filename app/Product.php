<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

    public function units() {
        return $this->belongsToMany(Unit::class, 'prices', 'product_id', 'unit_id');
    }

    public function prices() {
        return $this->hasMany(Price::class);
    }
}
