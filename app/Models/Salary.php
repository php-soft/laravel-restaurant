<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Salary extends Model
{
    protected $fillable = [
        'user_id',
        'salary',
        'allowance',
        'tardiness_reduction',
        'gross_pay',
        'net_pay',
        'tax',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
