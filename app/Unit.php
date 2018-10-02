<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['name'];

    public function products() {
        return $this->belongsToMany(Product::class, 'prices', 'unit_id', 'product_id');
    }
}
