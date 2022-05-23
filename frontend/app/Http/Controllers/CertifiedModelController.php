<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertifiedModel;
use Illuminate\Support\Facades\DB;

class CertifiedModelController extends Controller
{
    public static function registerUser($user, $course)
    {
        return DB::table('certifications')->insert(['user' => $user, 'course_name' => $course]);
    }
}
