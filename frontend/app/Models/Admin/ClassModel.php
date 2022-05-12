<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'courses';
    
    protected $fillable = [
        'course_name', 
        'class',
        'course_token'
    ];

    protected $cast = [
        'class' => 'array'
    ];

}
