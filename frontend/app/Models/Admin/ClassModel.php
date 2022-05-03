<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    public $table = 'courses';
    
    public $fillable = [
        'course_name', 
        'class',
        'course_token'
    ];

    public $cast = [
        'class' => 'array'
    ];

}
