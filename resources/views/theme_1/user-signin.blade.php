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
                        <span class="tab-inactive-unique">
                            Sign Up
                        </span>
                    </a>

                    <a href="{{ route('user-signin') }}" class="text-decoration-none">
                        <span class="tab-active-unique">Log In</span>
                    </a>
                </div>

                <hr>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (request('message') === 'payment_failed')
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Payment Failed:</strong> Please log in and try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <p class="text-2-3 text-justify">
                    Your personal data will be used to support your experience throughout this website, to manage access to
                    your account, and for other purposes described in our <a href="#"
                        class="text-decoration-none">privacy policy.</a>
                </p>
                <hr>
                <form method="POST" action="{{ route('course-user-signin') }}" class="login-form-unique">
                    @csrf
                    <input type="email" name="email" placeholder="Email" class="login-input-unique" required />
                    <div class="password-wrapper-unique">
                        <input type="password" name="password" placeholder="Password" id='password-field'
                            class="login-input-unique" required />
                        <span class="eye-icon-unique">
                            <i id="eye-icon" class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="login-options-unique">
                        <label><input type="checkbox" checked /> Keep me logged in</label>
                        <a href="#" class="forgot-link-unique">Forgot Password?</a>
                    </div>
                    <button type="submit" class="login-button-unique">Log In</button>
                </form>

                <p class="signup-redirect-unique">Don’t have an account? <a href="{{ route('user-signup') }}">Sign Up</a>
                </p>
                <p class="creator-link-unique">Are you a course creator? <a href="#">Click Here</a></p>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('file/css/user-signin.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script>
        history.pushState(null, '', location.href);
        window.addEventListener('popstate', function() {
            history.pushState(null, '', location.href);
        });
    </script>
    <script>
        $("#eye-icon").click(function() {
            $(this).toggleClass("fa-eye-slash");
            const type = $('#password-field').attr('type') === 'password' ? 'type' : 'password';
            $('#password-field').attr('type', type)
        });
    </script>
@endsection
