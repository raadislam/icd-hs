<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserPayment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'course_id', 'transaction_id', 'payment_status'];

    public function user()
    {
        return $this->belongsTo(CourseUser::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
