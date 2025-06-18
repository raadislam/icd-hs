<?php

// app/Models/CertificateRequest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateRequest extends Model
{
    protected $fillable = [
        'course_user_id',
        'course_id',
        'status',
        'requested_at',
        'sent_at',
        'fail_reason'
    ];
    public function courseUser()
    {
        return $this->belongsTo(CourseUser::class, 'course_user_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
