<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CarrosController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/carros', [CarrosController::class, 'listar']);
Route::get('/carros/{id}', [CarrosController::class, 'listarID']);

