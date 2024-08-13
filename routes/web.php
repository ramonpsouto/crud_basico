<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', ProdutosController::class);

Route::get('/produtos/{produto}/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');