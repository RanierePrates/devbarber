<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarberTestimonial
 * @package App\Models
 */
class BarberTestimonial extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'barber_id', 'rate', 'body'
    ];

}
