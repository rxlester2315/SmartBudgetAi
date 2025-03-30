<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'landingpage'])->name('mainpages');


Route::get('/login', [AuthController::class, 'ShowloginFrm']);
Route::get('/register', [AuthController::class, 'ShowRegisterFrm']);


Route::post('/login', [AuthController::class, 'login'])->name('login-backend');
Route::post('/register', [AuthController::class, 'registerBackend'])->name('register');


Route::get('/NormalUser', [AuthController::class, 'normalUserDashboard'])->name('user.dashboard');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin' , [AuthController::class, 'adminDashboard'])->name('admin.dashboard');


Route::get('/setgoals', [HomeController::class, 'setgoals'])->name('setgoals');

Route::get('/setexpenses', [HomeController::class, 'setexpenses'])->name('setexpenses');