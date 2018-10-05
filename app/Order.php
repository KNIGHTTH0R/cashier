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
        $sub_total = 0;
        $order = self::create([
            'number' => $request['number'],
            'customer_id' => $request['customer_id'],
        ]);

        foreach ($request['order']['items'] as $item) {
            $product = Product::find($item['product_id']);
            $price = $product->price($item['unit_id']);

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'unit_id' => $item['unit_id'],
                'quantity' => $item['quantity'],
                'price' => $price
            ]);
            $sub_total += $price * $item['quantity'];
        }

        $order->edit([
            'sub_total' => $sub_total,
            'tax' => $item['tax'],
            'discount' => $item['discount'],
            'total' => $sub_total - $item['discount'] + $item['tax']
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
        $data = array_merge($this->toArray(), $request);
        return $this->update($data);
    }

    /**
     * recalculate
     *
     * @return void
     */
    public function recalculate()
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
