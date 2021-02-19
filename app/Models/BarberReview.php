<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarberReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'barber_id', 'rate'
    ];

    protected $casts = [
        'rate' => 'float'
    ];
}
