<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_url',
        'discription',
        'status',
        'user_id'
];
}
