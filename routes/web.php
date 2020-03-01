<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("about","Tienda@about");
Route::get("contacta","Tienda@contacta");
Route::get("comprar","Tienda@comprar");
Route::get("gestionar","Tienda@gestionar");

Route::resource("Producto", "ProductoController");
Route::resource("Tienda", "TiendaController");
Route::resource("Stock", "StockController");
Route::resource("Familia", "FamiliaController");
