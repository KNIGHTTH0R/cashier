<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['number', 'customer_id', 'total', 'sub_total', 'discount', 'tax'];

    /**
     * order_items
     *
     * @return void
     */
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * store
     *
     * @param array $request
     * @return void
     */
    public static function store(array $request)
    {
        $order = self::create([
            'number' => $request['number'],
            'customer_id' => $request['customer_id'],
            'tax' => $request['tax'],
            'discount' => $request['discount'],
        ]);

        foreach ($request['items'] as $item) {
            $product = Product::find($item['product_id']);
            $price = $product->price($item['unit_id']);
            $data = [
              'order_id' => $order->id,
              'product_id' => $product->id,
              'unit_id' => $item['unit_id'],
              'quantity' => $item['quantity'],
              'price' => $price
            ];
            OrderItem::store($data);
        }
        $order->calculate();

        return $order;
    }

    /**
     * edit
     *
     * @param array $request
     * @return void
     */
    public function edit(array $request)
    {
        $data = array_merge($this->toArray(), $request);
        return $this->update($data);
    }

    /**
     * recalculate
     *
     * @return void
     */
    public function calculate()
    {
        $sub_total = 0;
        foreach ($this->order_items as $item) {
            $sub_total += $item->price * $item->quantity;
        }
        $data = [
            'sub_total' => $sub_total,
            'total' => $sub_total - $this->discount + $this->tax
        ];

        return $this->edit($data);
    }
}
