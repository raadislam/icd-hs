<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Your Course Certificate</title>
</head>

<body>
    <h2 style="color:#2176b5;">Congratulations!</h2>
    <p>
        Dear {{ $user->name }},
    </p>
    <p>
        You have successfully completed the course: <strong>{{ $course->title }}</strong>.<br>
        Your certificate is attached as a PDF.
    </p>
    <p>
        Keep learning and achieving great things!
    </p>
    <br>
    <div style="color:#999;font-size:0.95em;">
        — ICDTR E-learning Team
    </div>
</body>

</html>
