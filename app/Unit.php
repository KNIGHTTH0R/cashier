<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'code'];

    /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'prices', 'unit_id', 'product_id');
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
          'code' => $request['code']
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
          'code' => $request['code']
        ]);
    }
}
