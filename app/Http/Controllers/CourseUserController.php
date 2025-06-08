<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseLoginRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CourseUserController extends Controller
{

    public function register(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'password_confirmation' => 'required'
        ]);

        $user = CourseUser::create([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        event(new Registered($user));

        return redirect()->route('user-signin');
    }


    public function signin(CourseLoginRequest $request)
    {
        $request->authenticate(); // validates and logs in

        return redirect()->intended('/course');
    }

    public function signout(Request $request)
    {
        Auth::guard('course')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user-signin'); // or any route you prefer
    }
}
