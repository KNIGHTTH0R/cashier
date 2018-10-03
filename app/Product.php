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

    public static function store(array $request) {
        return self::create([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
    }

    public function edit(array $request) {
        return $this->update([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
    }
}
