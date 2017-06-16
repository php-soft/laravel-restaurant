<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $fillable = [
        'table_id',
        'user_id'
        'status',
        'total',
    ];

    public function dishOrders()
    {
        return $this->hasMany(DishOrder::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
