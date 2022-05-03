<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Server\ClassController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'access']);

Route::get('/logout', [LoginController::class, 'destroy']);

Route::group(['middleware' => 'navegation'], function(){

    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/module/{id}/{class?}', [ClassController::class, 'show']);

});

