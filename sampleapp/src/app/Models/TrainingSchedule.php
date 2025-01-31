<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSchedule extends Model
{
    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'location',
        'participant_limit',
    ];
}