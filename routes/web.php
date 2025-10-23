<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

//matakuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah');
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
//home
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/login', [AuthController::class, 'index']);

Route::post('auth/login', [AuthController::class, 'login'])
		->name('auth.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);

