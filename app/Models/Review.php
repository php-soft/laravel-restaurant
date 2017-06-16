<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'dish_id',
        'rate',
        'content',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
