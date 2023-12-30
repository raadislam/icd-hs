<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Bright Hill Academy">
    <meta name="author" content="okler.net">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('file') }}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('file') }}/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    @yield('meta')
    @include('theme_1.layout.partials.css')
    @yield('style')

    <!-- Head Libs -->
    <script src="{{ asset('file') }}/vendor/modernizr/modernizr.min.js"></script>

</head>

<body>

    <div class="body">
        @include('theme_1.layout.partials.header')

        <div role="main" class="main">
            @yield('content')
        </div>

        @include('theme_1.layout.partials.footer')
    </div>
    @include('theme_1.layout.partials.js')
    @yield('script')
</body>

</html>
