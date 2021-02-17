<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarberPhoto
 * @package App\Models
 */
class BarberPhoto extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['barber_id', 'url'];
}
