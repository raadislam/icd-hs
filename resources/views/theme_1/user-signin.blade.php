@extends('theme_1.layout.layout')
@section('title')
    ICDTR || Sign In
@endsection

@section('content')
    <div class="login-container-unique">
        <div class="login-left-unique">
            <img src={{ asset('file/img/user-auth/login-image.svg') }} alt="Illustration" class="login-image-unique" />
            <h2 class="login-heading-unique">Empower Yourself For Free</h2>
            <p class="login-description-unique">
                Join our community of 45 million+ learners, upskill with CPD UK accredited courses,
                explore career development tools and psychometrics - all for free.
            </p>
            <p class="login-help-unique">
                Having trouble Logging In? <a href="#" class="login-link-unique">Get in touch</a>
            </p>
        </div>

        <div class="login-right-unique">
            <div class="login-tabs-unique">
                <span class="tab-inactive-unique">Sign Up</span>
                <span class="tab-active-unique">Log In</span>
            </div>

            <div class="login-social-icons-unique">
                <button class="social-btn-unique">📘</button>
                <button class="social-btn-unique">🟥</button>
                <button class="social-btn-unique">🟡</button>
                <button class="social-btn-unique">🔷</button>
            </div>

            <div class="login-or-divider-unique">
                <hr /><span>OR</span>
                <hr />
            </div>

            <form class="login-form-unique">
                <input type="email" placeholder="Email" class="login-input-unique" required />
                <div class="password-wrapper-unique">
                    <input type="password" placeholder="Password" class="login-input-unique" required />
                    <span class="eye-icon-unique">🙈</span>
                </div>
                <div class="login-options-unique">
                    <label><input type="checkbox" checked /> Keep me logged in</label>
                    <a href="#" class="forgot-link-unique">Forgot Password?</a>
                </div>
                <button type="submit" class="login-button-unique">Log In</button>
            </form>

            <p class="signup-redirect-unique">Don’t have an account? <a href="#">Sign Up</a></p>
            <p class="creator-link-unique">Are you a course creator? <a href="#">Click Here</a></p>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('file/css/user-signin.css') }}" rel="stylesheet">
@endsection
