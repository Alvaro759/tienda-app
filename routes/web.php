<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
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
Route::get('/usuario', [UsuarioController::class, 'index'])->middleware('auth', 'verified')->name('usuario.index');
Route::get('/usuario/create', [UsuarioController::class, 'create'])->middleware('auth', 'verified')->name('usuario.create');
Route::post('/usuario', [UsuarioController::class, 'store'])->middleware('auth', 'verified')->name('usuario.store');
Route::get('/usuario/{id}', [UsuarioController::class, 'show'])->middleware('auth', 'verified')->name('usuario.show');
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])->middleware('auth', 'verified')->name('usuario.edit');
Route::put('/usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('/usuario/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

Route::get('/inicio', [CategoriaController::class, 'index'])->middleware('auth', 'verified')->name('categoria.index');
Route::get('/inicio/create', [CategoriaController::class, 'create'])->middleware('auth', 'verified')->name('categoria.create');
Route::post('/inicio', [CategoriaController::class, 'store'])->middleware('auth', 'verified')->name('categoria.store');
Route::get('/inicio/{id}', [CategoriaController::class, 'show'])->middleware('auth', 'verified')->name('categoria.show');
Route::get('/inicio/{id}/edit', [CategoriaController::class, 'edit'])->middleware('auth', 'verified')->name('categoria.edit');
Route::put('/inicio/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/inicio/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

Route::get('/email/verify', [VerificationController::class, 'showVerification'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verification'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'sendEmail'])->middleware(['auth'])->name('verification.send');

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/login/failed', "loginFailed")->name('loginFailed');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('login');
});
