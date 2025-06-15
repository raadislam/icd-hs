<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureCourseIsPaid
{
    public function handle(Request $request, Closure $next)
    {
        $courseId = $request->route('course') ?? $request->route('id');

        $user = auth('course')->user();

        $hasPaid = $user && $user->payments()
            ->where('course_id', is_object($courseId) ? $courseId->id : $courseId)
            ->where('payment_status', 'success')
            ->exists();

        if (! $hasPaid) {
            return redirect()->route('user-signin')->with('error', 'Access denied. Please complete payment.');
        }

        return $next($request);
    }
}
