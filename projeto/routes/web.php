<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;



// ---------------------------rotas do projeto------------------------------------
Route::resource('categorias', CategoriaController::class);
Route::resource('produtos', ProdutoController::class);

Route::get('/login',[AuthController::class,'showFormLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });

    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});