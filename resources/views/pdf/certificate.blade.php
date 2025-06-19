<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Certificate of Completion</title>
    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f8fafb;
        }

        .cert-title {
            font-size: 2.5rem;
            margin: 32px 0 18px 0;
            font-weight: bold;
            color: #2176b5;
        }

        .cert-user {
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
            color: #222;
        }

        .cert-course {
            font-size: 1.1rem;
            color: #444;
        }

        .cert-footer {
            margin-top: 60px;
            font-size: 1.1rem;
            color: #444;
        }

        .cert-signature {
            margin-top: 44px;
            font-size: 1.07rem;
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
    <div class="cert-footer">
        Date: {{ \Carbon\Carbon::now()->format('j M, Y') }}
    </div>
    <div class="cert-signature">
        _______________________<br>
        <span style="font-size: 0.95em;">Signature</span>
    </div>
</body>

</html>
