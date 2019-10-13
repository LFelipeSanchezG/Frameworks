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

Route::get('inicio',function(){
	return view('Contenido.inicio');
})->name("inicio");

Route::get('tienda',function(){
	return view('Contenido.tienda');
})->name("tienda");

Route::get('producto1',function(){
	return view('Contenido.producto1');
})->name("producto1");