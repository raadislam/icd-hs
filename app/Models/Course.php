<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CoursePublisher;
use App\Models\CourseUser;

class Course extends Model
{
    use HasFactory;

    /**
     * Publisher of the course.
     */
    public function publisher()
    {
        return $this->belongsTo(CoursePublisher::class, 'course_publisher_id');
    }

    /**
     * Users who have paid for this course.
     */
    public function paidUsers(): BelongsToMany
    {
        return $this->belongsToMany(CourseUser::class, 'course_user_payments', 'course_id', 'user_id')
            ->withPivot('transaction_id', 'payment_status')
            ->withTimestamps();
    }
}
