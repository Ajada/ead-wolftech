<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesSeenModel extends Model
{
    use HasFactory;

    protected $table = 'classes_seen';

    protected $fillable = [
        'user_name',
        'classes',
        'course_name',
    ];

    protected $cast = [
        'classes' => 'array',
    ];

}
