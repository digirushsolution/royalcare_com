<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'picking_up',
        'dropping_off',
        'email',
        'phone',
        'checkin_date',
        'checkout_date',
        'car_preference',
        'form_type',
        'total_adults',
        'total_children',
    ];
   
}
