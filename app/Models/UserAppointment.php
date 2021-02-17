<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAppointment
 * @package App\Models
 */
class UserAppointment extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'barber_id', 'ap_datetime'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'ap_datetime' => 'datetime'
    ];

}
