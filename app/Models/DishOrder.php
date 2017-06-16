<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DishOrder extends Model
{
    protected $table = 'dish_orders';

    protected $fillable = [
        'order_id',
        'dish_id',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
