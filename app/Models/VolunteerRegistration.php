<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VolunteerRegistration extends Model
{
        use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'phone',
        'date_of_birth',
        'password',
        'confirm_password',
        'gender',
        'village',
        'union',
        'upazilla',
        'district',
        'present_address',
        'educational_qualification',
        'job_description',
        'past_volunteering_experience',
        'curricular_activities',
        'nid_birth_certificate',
        'photo',
        'humanitarian_activities'
];
}
