<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsModel extends Model
{
    use HasFactory;

    protected $table = 'questions';

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
