<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table = 'amenities';
    protected $primaryKey = 'amenity_id';
    protected $fillable = [
        'amenity_name',
        'description',
        'price_per_use',
    ];
}