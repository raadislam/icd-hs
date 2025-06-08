<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapySchedule extends Model
{
    use HasFactory;

    protected $fillable = ['therapist_id', 'weekday', 'slot'];

    public function therapist()
    {
        return $this->belongsTo(Therapist::class, 'therapist_id');
    }
}
