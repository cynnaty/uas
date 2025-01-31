<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'name',
        'age',
        'birthdate',
        'main_skill',
        'course_history',
        'attendance',
        'evaluation_score',
        'certification_status',
    ];
}