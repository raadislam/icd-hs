<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Certificate of Completion</title>
    <style>
        body {
            font-family: 'Times New Roman', 'Georgia', serif;
            background: #f9fafb;
            margin: 0;
            padding: 0;
        }

        .certificate-container {
            width: 820px;
            height: 570px;
            background: #fff;
            border: 10px solid #1a355b;
            margin: 20px auto;
            padding: 0;
            position: relative;
        }

        .cert-header {
            text-align: center;
            padding-top: 38px;
            letter-spacing: 2px;
        }

        .cert-title {
            font-size: 2.8rem;
            color: #1a355b;
            font-weight: bold;
            margin-bottom: 12px;
            letter-spacing: 2.5px;
        }

        .cert-org {
            color: #117ba1;
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 24px;
            letter-spacing: 1.5px;
        }

        .cert-line {
            width: 340px;
            margin: 16px auto 24px auto;
            border-bottom: 2px solid #e6e6e6;
        }

        .cert-body {
            text-align: center;
            margin-top: 8px;
            font-size: 1.23rem;
            color: #222;
        }

        .cert-student {
            margin-top: 23px;
            font-size: 1.45rem;
            font-weight: bold;
            color: #2176b5;
            letter-spacing: 1.5px;
        }

        .cert-course {
            margin-top: 8px;
            font-size: 1.13rem;
            font-weight: 600;
            color: #1a355b;
        }

        .cert-date {
            text-align: right;
            position: absolute;
            right: 38px;
            bottom: 48px;
            font-size: 1.03rem;
            color: #444;
        }

        .cert-signature-block {
            position: absolute;
            left: 55px;
            bottom: 40px;
            text-align: left;
        }

        .cert-signature-img {
            width: 130px;
            height: auto;
            margin-bottom: 4px;
        }

        .cert-signer-name {
            font-size: 1.03rem;
            font-weight: 600;
            color: #1a355b;
        }

        .cert-signer-title {
            font-size: 0.97rem;
            color: #777;
        }

        /* Optional: watermark or seal image */
        .cert-seal {
            position: absolute;
            right: 48px;
            top: 85px;
            width: 88px;
            opacity: 0.16;
        }
    </style>
</head>

<body>
    <div class="certificate-container">
        <div class="cert-header">
            <div class="cert-title">CERTIFICATE OF COMPLETION</div>
            <div class="cert-org">ICDTR – Center for Global Health</div>
        </div>

        <div class="cert-line"></div>

        <div class="cert-body">
            <div>This is to certify that</div>
            {{-- <div class="cert-student">{{ $user->name }}</div>
            <div>has successfully completed the course</div>
            <div class="cert-course">"{{ $course->title }}"</div> --}}
            <div class="cert-student">Reasad Islam Raad</div>
            <div>has successfully completed the course</div>
            <div class="cert-course">"Comprehensive Caregiving Training Program (Level 2 & 3)"</div>
        </div>

        {{-- Optional watermark/seal, if you have an image. Example: --}}
        {{-- <img src="{{ public_path('path/to/seal.png') }}" class="cert-seal" alt="Seal"> --}}

        <div class="cert-signature-block">
            <img src="{{ public_path('Signature.png') }}" class="cert-signature-img" alt="Signature">
            <div class="cert-signer-name">M. Rahman</div>
            <div class="cert-signer-title">Director, ICDTR</div>
        </div>

        <div class="cert-date">
            Date: {{ \Carbon\Carbon::now()->format('j F, Y') }}
        </div>
    </div>
</body>

</html>
