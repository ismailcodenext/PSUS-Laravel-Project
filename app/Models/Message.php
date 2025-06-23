<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'message_name',
        'message_desc',
        'company_name',
        'message_details',
        'status',
        'user_id'
];
}
