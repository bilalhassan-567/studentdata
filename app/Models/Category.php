<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'studentdata';
    
    protected $fillable = 
    [
        'student_name',
        'student_email',
        'date_of_birth',
        'gender',
        'enrollment_number',
        'course',
        'enrollment_date'
    ];
}
