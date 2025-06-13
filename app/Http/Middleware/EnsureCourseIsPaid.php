<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureCourseIsPaid
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth('course')->user();
        $courseId = $request->route('id');

        if (!$user || !$user->paidCourses()->where('course_id', $courseId)->where('payment_status', 'success')->exists()) {
            return redirect()->route('course')->with('error', 'Please purchase the course to access.');
        }

        return $next($request);
    }
}
