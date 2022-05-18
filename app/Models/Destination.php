<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;



    protected $fillable = [
        'short_name',
        'full_name',
        'thumbnail_img',
        'home_page_status',
        'status'
    ];
}
