<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id',
        'payment_status',
        'amount',
        'currency',
        'customer_name',
        'customer_email',
        'customer_phone',
        'response_data',
    ];

    protected $casts = [
        'response_data' => 'array',
    ];
}
