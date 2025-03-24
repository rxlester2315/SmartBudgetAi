<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mainpage', [HomeController::class, 'landingpage'])->name('mainpages');


Route::get('/login', [AuthController::class, 'ShowloginFrm']);
Route::get('/register', [AuthController::class, 'ShowRegisterFrm']);


Route::post('/login', [AuthController::class, 'login'])->name('login-backend');
Route::post('/register', [AuthController::class, 'registerBackend'])->name('register');


Route::get('/NormalUser', [AuthController::class, 'normalUserDashboard'])->name('user.dashboard');