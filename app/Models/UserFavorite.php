<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserFavorite
 * @package App\Models
 */
class UserFavorite extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'barber_id'
    ];
}
