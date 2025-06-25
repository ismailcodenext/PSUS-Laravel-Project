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
        'short_content', // Summernote content for quick reading
        'long_content', // Summernote content for detailed reading
        'user_id'
];
}
