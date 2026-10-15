<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $table = 'accommodations';
    protected $primaryKey = 'accommodation_id';
    protected $fillable = [
        'accommodation_name',
        'description',
        'capacity',
        'price_per_night',
        'availability_status',
    ];
}
