<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

//matakuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
//home
Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/login', [AuthController::class, 'index']);

Route::post('auth/login', [AuthController::class, 'login'])
		->name('auth.login');
