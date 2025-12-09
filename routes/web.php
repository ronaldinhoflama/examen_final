<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductoController;
Route::get('/productos/stock-alto', [ProductoController::class, 'stockAlto'])
    ->name('productos.stock.alto');

Route::resource('productos', ProductoController::class);


Route::get('/', function () {
    return view('welcome');
});

