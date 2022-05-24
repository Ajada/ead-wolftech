<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertifiedModel extends Model
{
    use HasFactory;

    protected $table = 'certifications';

    protected $fillable = [
        'user',
        'course_name',
        'created_at', 
        'updated_at',
    ];
}
