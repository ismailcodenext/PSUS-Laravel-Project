<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUS extends Model
{
     use HasFactory;

    protected $fillable = [
        'img_url',
        'short_title',
        'long_content',
        'short_content',
        'description',
        'status',
        'user_id',
    ];
}
