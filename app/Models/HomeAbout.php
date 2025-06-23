<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'title_1',
        'title_1_desc',
        'title_2',
        'title_2_desc',
        'user_id'
];
}
