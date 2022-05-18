<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;



    protected $fillable = [
        'tour_title',
        'shot_discription_line',
        'from_destination',
        'thubnail_img',
        'large_img',
        'to_destination',
        'tour_type_one',
        'tour_type_two',
        'tour_type_three',
        'tour_type_four',
        'age_range',
        'operated_in',
        'max_tour_size',
        'tour_days_number',
        'tour_days_text',
        'discount_percentage',
        'price',
        'tour_information',
        'tour_details',
        'home_page_status',
        'status',
        'seo_keyword',
        'seo_discription'
    ];
}
