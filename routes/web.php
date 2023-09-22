<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;



Route::get('/', function () {
    return view('welcome');
});

// ----------------------- produto ------------------------------

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::post('/produto/create', [ProdutoController::class, 'store']);

Route::get('/produto/{id}', [ProdutoController::class, 'show']);

Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('/produto/{id}', [ProdutoController::class, 'update']);

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy']);

Route::get('/listaDeProdutos', [ProdutoController::class, 'listaDeProdutos']);

// ----------------------- produto ------------------------------

// ----------------------- categoria ------------------------------

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create']);
Route::post('/categoria/create', [CategoriaController::class, 'store']);

Route::get('/categoria/{id}', [CategoriaController::class, 'show']);

Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit']);
Route::put('/categoria/{id}', [CategoriaController::class, 'update']);

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);

// ----------------------- categoria ------------------------------


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

