<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentModel extends Model
{
    use HasFactory;

    protected $table = 'assessments';

    protected $fillable = [
        'assessment_number',
        'assessment_name',
        'questions'
    ];

    

}
