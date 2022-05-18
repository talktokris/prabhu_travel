<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_booking extends Model
{
    use HasFactory;
    

    protected $fillable =[
        'tour_id',
        'booking_staus',
        'name',
        'email',
        'nationality',
        'gender',
        'phone',
        'booking_date',
        'handle_by',

    ];

    
}
