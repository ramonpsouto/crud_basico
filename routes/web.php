<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FilmesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', ProdutosController::class);
Route::resource('filmes', FilmesController::class);