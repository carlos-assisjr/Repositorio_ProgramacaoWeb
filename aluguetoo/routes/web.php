<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FerramentaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\ItemAluguelController;
use App\Models\Ferramenta;

Route::resource('categorias', CategoriaController::class);
Route::resource('ferramentas', FerramentaController::class);
Route::resource('lojas', LojaController::class);
Route::resource('alugueis', AluguelController::class);
Route::resource('itens_aluguel', ItemAluguelController::class);