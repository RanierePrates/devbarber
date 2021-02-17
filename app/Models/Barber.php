<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Barber
 * @package App\Models
 */
class Barber extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'stars', 'latitude', 'longitude'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'stars' => 'float'
    ];
}
