<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/exercicio1', function () {
    return view('exercicios.exercicio1');
});

Route::post('/resposta1', function(Request $request) {
    $valor1 = $request->input('valor1');
    $valor2 = $request->input('valor2');
    $soma = $valor1 + $valor2;
    return("A soma é: $soma");
});

Route::resource('categorias', CategoriaController::class);

Route::resource('produtos', ProdutoController::class);
