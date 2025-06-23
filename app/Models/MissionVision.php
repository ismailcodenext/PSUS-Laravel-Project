<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MissionVision extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'misson_title',
        'misson_desc',
        'visions_title',
        'visions_desc',
        'status',
        'user_id',
    ];
}
