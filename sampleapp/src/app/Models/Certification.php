<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'participant_id',
        'certification_name',
        'issue_date',
        'expiry_date',
        'status',
    ];

    // Relasi ke model Participant
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}