@extends('theme_1.layout.course')
@section('title')
    Sign In
@endsection

@section('content')
    <div class="login-main-container-unique">
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
                    <a href="{{ route('user-signup') }}" class="text-decoration-none">
                        <span class="tab-active-unique">
                            Sign Up
                        </span>
                    </a>

                    <a href="{{ route('user-signin') }}" class="text-decoration-none">
                        <span class="tab-inactive-unique">Log In</span>
                    </a>
                </div>

                {{-- <div class="login-social-icons-unique">
                    <button class="social-btn-unique">📘</button>
                    <button class="social-btn-unique">🟥</button>
                    <button class="social-btn-unique">🟡</button>
                    <button class="social-btn-unique">🔷</button>
                </div>

                <div class="login-or-divider-unique">
                    <hr /><span>OR</span>
                    <hr />
                </div> --}}
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('course-user-registration') }}"class="login-form-unique">
                    @csrf

                    <input type="text" name="name" placeholder="Full Name" class="login-input-unique" required />
                    <input type="text" name="phone_number" placeholder="Phone Number" class="login-input-unique"
                        required />
                    <input type="email" name="email" placeholder="Email" class="login-input-unique" required />
                    <div class="password-wrapper-unique">
                        <input type="password" name="password" placeholder="Password" id='password-field'
                            class="login-input-unique" required />
                        <span class="eye-icon-unique">
                            <i id="eye-icon" class="fas fa-eye"></i>
                        </span>
                    </div>

                    <div class="password-wrapper-unique">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="login-input-unique" required />

                    </div>

                    <button type="submit" class="login-button-unique">Register</button>
                </form>

                <p class="signup-redirect-unique">Do you have an account? <a href="{{ route('user-signin') }}">Log in</a>
                </p>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('file/css/user-signin.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script>
        $("#eye-icon").click(function() {
            $(this).toggleClass("fa-eye-slash");
            const type = $('#password-field').attr('type') === 'password' ? 'type' : 'password';
            $('#password-field').attr('type', type)
        });
    </script>
@endsection
