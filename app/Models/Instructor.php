<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ["name", "address", "phone_number", "dob", "nid", "img", "email", "about"];

    use HasFactory;
}
