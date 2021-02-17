<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarberService
 * @package App\Models
 */
class BarberService extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'barber_id', 'name', 'price'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'price' => 'float'
    ];
}
