<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizModel extends Model
{
    use HasFactory;

    protected $table = 'quiz';

    protected $fillable = [
        'query',
        'options',
        'right_answer',
        'observation',
    ];

    protected $cast = [
        'options' => 'array',
    ];
}
