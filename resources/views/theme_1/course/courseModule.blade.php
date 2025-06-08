@extends('theme_1.layout.course')
@section('title')
    Course Modules
@endsection

@section('content')
    @foreach ($modules as $index => $module)
        <x-module-bar :title="$module['title']" :outcomes="$module['outcomes']" :hours="$module['hours']" :progress="$module['progress']" :id="$index" />
    @endforeach
@endsection


@section('script')
    {{-- Add this once, after the loop --}}
    <script>
        $(document).ready(function() {
            @foreach ($modules as $index => $module)
                $('#progress-fill-{{ $index }}').animate({
                    width: '{{ (int) $module['progress'] }}%'
                }, 1000);
            @endforeach
        });
    </script>
@endsection

@section('style')
    <link href="{{ asset('file/css/course-module-box.css') }}" rel="stylesheet">
@endsection
