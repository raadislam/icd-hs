<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserModuleProgress extends Model
{
    use HasFactory;
    protected $fillable = ['course_user_id', 'course_id', 'module_index', 'progress'];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
