<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_image extends Model
{
    use HasFactory;

 	 	
    protected $fillable = [
        'tour_id',
        'large_img',
        'mid_img',
        'thumbnail_img',
      
    ];
}
