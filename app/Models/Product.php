<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'airport_code',
        'airport_name',
        'country_name',
        'country_abbrev',
        'world_area_code',
    ];
}
