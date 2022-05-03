<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreModel extends Model
{
    use HasFactory;

    protected $table = 'score_student';

    protected $fillable = [
        'student',
        'class_score',
        'final_result'
    ];

    protected $cast = [
        'class_score' => 'array',
        'final_result' => 'array'
    ];

}
