<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class WhatWeDoPage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'img_url',
        'short_title',
        'long_title',
        'short_description',
        'content',
        'status',
        'user_id'
    ];
}
