<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnidadeProdutoController;
use App\Http\Controllers\AluguelController;


Route::resource('categorias', CategoriaController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('users', UserController::class);
Route::resource('unidades_produtos', UnidadeProdutoController::class);
Route::resource('alugueis', AluguelController::class);