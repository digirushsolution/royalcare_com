<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'phone',
        'adults',
        'children',
        'checkin_date',
        'checkout_date',
        'room_preference',
        'form_type',
    ];
   
}
