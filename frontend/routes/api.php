<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\Server\ClassController;

Route::post('/login', [LoginController::class, 'access']);

Route::post('/course/add', [ClassController::class, 'store']);

Route::get('/courses/{id}/{class?}', [ClassController::class, 'show']);


// Route::post('/questions_response/{user?}', [ScoreController::class, 'update']);

Route::post('/questions_response', [ScoreController::class, 'update']);

