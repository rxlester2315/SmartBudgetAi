<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mainpage', [HomeController::class, 'landingpage']);


Route::get('/login', [AuthController::class, 'ShowloginFrm']);
Route::get('/register', [AuthController::class, 'ShowRegisterFrm']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'registerBackend'])->name('register');