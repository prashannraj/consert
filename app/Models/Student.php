<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes;
    
    protected $guard = "student";
    
    protected $fillable = [
        'email',
        'password',
        'token',
        'extra',
        'status'
    ];
    
    protected $casts = [
        'extra' => 'array',
    ];
}
