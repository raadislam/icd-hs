<?php

return [
    'store_id' => env('AMARPAY_STORE_ID'),
    'signature_key' => env('AMARPAY_SIGNATURE_KEY'),
    'sandbox' => env('AMARPAY_SANDBOX', true),

    'sandbox_url' => 'https://sandbox.aamarpay.com/request.php',
    'live_url' => 'https://secure.aamarpay.com/request.php',

    'sandbox_verification_url' => 'http://sandbox.aamarpay.com/api/v1/trxcheck/request.php',
    'live_verification_url' => 'https://secure.aamarpay.com/api/v1/trxcheck/request.php',

    'success_url' => 'http://course.icd-hs.test/amarpay/success',
    'fail_url' => 'http://course.icd-hs.test/amarpay/fail',
    'cancel_url' => 'http://course.icd-hs.test/amarpay/cancel',
];
