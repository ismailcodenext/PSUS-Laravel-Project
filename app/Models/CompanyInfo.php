<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'email',
        'address',
        'mobile',
        'description',
        'fb_link',
        'insta_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
        'user_id'
];
}
