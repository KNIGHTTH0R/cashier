<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'gender'];

    /**
     * orders
     *
     * @return void
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function options()
    {
        return self::all()->pluck('name', 'id');
    }
}
