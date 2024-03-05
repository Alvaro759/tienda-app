<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/email/verify', [VerificationController::class,'ShowVerification'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verification'])->middleware(['auth'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class,'sendEmail'])->middleware(['auth', 'throttle:6.1'])->name('verification.send');

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/inicio', "inicio")->middleware('auth', 'verified')->name('inicio');
Route::view('/login/failed', "loginFailed")->name('loginFailed');

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/', function () {
    return view('login');
});
