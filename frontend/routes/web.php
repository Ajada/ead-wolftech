<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Server\AssessmentController;
use App\Http\Controllers\Server\ClassController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'access']);

Route::get('/logout', [LoginController::class, 'destroy']);

Route::group(['middleware' => 'navegation'], function(){

    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/module/{id}/{class?}', [ClassController::class, 'show']);

    Route::get('/assessment/{assessment?}', [AssessmentController::class, 'showView']);

    // Route::get('/assessment/module/{id?}', function(){
    //     return view('app.modules.assessment');
    // });

    Route::get('/assessment/module/{id}', [AssessmentController::class, 'index']);

    

});
