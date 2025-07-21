<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_address',
        'guardian_name',
        'guardian_mobile',
        'student_mobile',
        'course_name',
        'current_term',
        'college_name_address',
        'amt_per_annum',
        'financial_yr',
        'status'
    ];
}
