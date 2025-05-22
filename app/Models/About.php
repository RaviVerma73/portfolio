<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'email',
        'phone',
        'age',
        'residence',
        'freelance',
        'address',
        'descreption',
        'cv',
        'image',
    ];
}
