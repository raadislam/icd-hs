<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;
    protected $fillable = ["name", "address", "phone_number", "dob", "nid", "img", "email", "about", "designation", "qualification", "sub_category_id", "category_id"];

    public function schedules()
    {
        return $this->hasMany(TherapistSchedule::class);
    }

    public function therapies()
    {
        return $this->belongsToMany(Therapy::class);
    }
}
