<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\Server\AssessmentController;
use App\Http\Controllers\Server\ClassController;
use App\Http\Controllers\Server\QueryController;

Route::post('/login', [LoginController::class, 'access']);

Route::post('/course/add', [ClassController::class, 'store']);

Route::get('/courses/{id}/{class?}', [ClassController::class, 'show']);

// Route::post('/questions_response/{user?}', [ScoreController::class, 'update']);

Route::post('/questions_response', [ScoreController::class, 'update']);

Route::group(['middleware' => 'questions_create'], function(){
    Route::post('/questions_created', [QueryController::class, 'store']);
    
});

Route::post('/assessment/response', [AssessmentController::class, 'getResult']);


