<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo(CoursePublisher::class, 'course_publisher_id');
    }
}
