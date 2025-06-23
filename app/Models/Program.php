<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'featured_img',
        'title',
        'description',
        'photos',
        'program_category_id',
        'user_id',
    ];

    public function programcategory()
    {
        return $this->belongsTo(ProgramCategory::class, 'program_category_id');
    }
}
