<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['number', 'customer_id', 'total', 'sub_total', 'discount', 'tax'];
}
