<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'user_id'
    ];

    public function programs()
    {
        return $this->hasMany(Program::class, 'program_category_id');
    }
}
