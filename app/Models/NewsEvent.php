<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsEvent extends Model
{
      use HasFactory;

    protected $fillable = [
        'banner_image',
        'img_url', // json field for multiple images
        'event_heading',
        'event_description',
        'status',
        'user_id'
];
}
