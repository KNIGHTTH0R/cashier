<?php

namespace App;

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
    protected $fillable = ['name', 'description'];

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
