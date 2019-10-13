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

Route::get('index',function(){
	return view('Contenido.index');
})->name("index");

Route::get('catalogo',function(){
	return view('categorias.catalogo');
})->name("catalogo");

Route::get('nosotros',function(){
	return view('Contenido.nosotros');
})->name("nosotros");

Route::get('contacto',function(){
	return view('Contenido.contacto');
})->name("contacto");

Route::get('admin',function(){
	return view('Plantillas.admin');
})->name("admin");

Route::get('registro',function(){
	return view('usuarios.registro');
})->name("registro");

Route::get('login',function(){
	return view('usuarios.login');
})->name("login");