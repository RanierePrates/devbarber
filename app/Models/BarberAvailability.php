<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarberAvailability
 * @package App\Models
 */
class BarberAvailability extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'barber_id', 'weekday', 'hours'
    ];

}
