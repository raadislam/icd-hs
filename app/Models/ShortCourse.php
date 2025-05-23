<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortCourse extends Model
{

    protected $fillable = ['title', 'description', 'fee', 'type'];

    use HasFactory;
}
