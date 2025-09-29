<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return view('welcome');
});

//hahahahaha
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
