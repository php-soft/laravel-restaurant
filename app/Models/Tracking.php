<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Tracking extends Model
{
    protected $fillable = [
        'user_id',
        'work_day',
        'start_time',
        'end_time',
        'total_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
