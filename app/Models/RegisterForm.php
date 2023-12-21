<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterForm extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_db_id',
        'student_id',
        'class_data_id',
        'student_name',
        'email',
        'father_name',
        'mother_name',
        'grand_father_name',
        'gender',
        'full_address',
        'parents_phone_number',
        'student_photo',
        'students_sign_photo',
        'citizenship_front_photo',
        'citizenship_back_photo',
        'transcript_photo',
        'character_photo',
        'school_fee_vouchers_photo',
        'extra',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'class_data_id' => 'integer',
        'extra' => 'array',
    ];
}
