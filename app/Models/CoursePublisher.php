<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePublisher extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->hasOne(Course::class, 'id');
    }
}
