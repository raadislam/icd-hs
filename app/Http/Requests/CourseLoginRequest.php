<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Support\Facades\Lang;


class CourseLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // allow everyone to attempt login
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.exists' => 'No course user account found with that email.',
        ];
    }

    protected function throttleKey(): string
    {
        return Str::lower($this->input('email')) . '|' . $this->ip();
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 3)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => Lang::get('Too many login attempts. Please try again in :seconds seconds.', [
                'seconds' => $seconds,
            ]),
        ]);
    }

    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        $credentials = $this->only('email', 'password');
        $user = \App\Models\CourseUser::where('email', $this->input('email'))->first();

        if (! $user) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => 'No course user account found with that email.',
            ]);
        }

        if (! Auth::guard('course')->attempt($credentials, $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('The provided credentials are incorrect.'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        $this->session()->regenerate();
    }
}
