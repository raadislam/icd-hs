<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Course;

class CourseUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'course';

    public function payments()
    {
        return $this->hasMany(CourseUserPayment::class, 'user_id');
    }


    /**
     * The courses this user has paid for.
     */

    // ✅ Tell Laravel your custom table name
    protected $table = 'course_users';

    public function paidCourses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_user_payments', 'user_id', 'course_id')
            ->withPivot('transaction_id', 'payment_status')
            ->withTimestamps();
    }
    public function moduleProgress()
    {
        return $this->hasMany(CourseUserModuleProgress::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
