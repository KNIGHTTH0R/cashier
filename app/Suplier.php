<?php

namespace App;

use App\Purchase;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['name', 'address', 'phone_number'];

    /**
     * purchases
     *
     * @return void
     */
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
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
          'address' => $request['address'],
          'phone_number' => $request['phone_number']
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
          'address' => $request['address'],
          'phone_number' => $request['phone_number']
        ]);
    }
}
