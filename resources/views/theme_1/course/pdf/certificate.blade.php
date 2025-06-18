<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
            font-family: sans-serif;
        }

        .cert-title {
            font-size: 2.5rem;
            margin: 32px 0 20px 0;
        }

        .cert-user {
            font-size: 1.3rem;
            margin: 20px 0;
        }

        .cert-course {
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
    <div class="cert-title">Certificate of Completion</div>
    <div class="cert-user">This is to certify that <strong>{{ $user->name }}</strong></div>
    <div class="cert-course">
        has successfully completed the course:<br>
        <b>{{ $course->title }}</b>
    </div>
    <div style="margin-top:48px;font-size:1.1rem;color:#444;">
        Date: {{ \Carbon\Carbon::now()->format('j M, Y') }}
    </div>
</body>

</html>
