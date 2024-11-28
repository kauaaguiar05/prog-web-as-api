<?php

use App\Http\Controllers\DiretorController;
use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Diretor', [DiretorController::class, 'index']);
Route::get('/Diretor/{id}', [DiretorController::class, 'show']);
Route::post('/Diretor', [DiretorController::class, 'store']);
Route::put('/Diretor/{id}', [DiretorController::class, 'update']);
Route::delete('/Diretor/{id}', [DiretorController::class, 'destroy']);

Route::get('/Filme', [FilmeController::class, 'index']);
Route::get('/Filme/{id}', [FilmeController::class, 'show']);
Route::post('/Filme', [FilmeController::class, 'store']);
Route::put('/Filme/{id}', [FilmeController::class, 'update']);
Route::delete('/Filme/{id}', [FilmeController::class, 'destroy']);