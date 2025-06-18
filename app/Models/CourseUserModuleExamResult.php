<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserModuleExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_user_id',
        'course_id',
        'module_index',
        'score',
        'total',
        'answers'
    ];

    protected $casts = [
        'answers' => 'array',
    ];
}
