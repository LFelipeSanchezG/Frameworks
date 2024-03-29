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
Route::get('pumasraw',function(){
	return "Hola Felipe Sánchez";
});
//Ruta con parametros
Route::get('utgz/{nombre}',function($nombre){
	return "Hola ".$nombre;
});
//Ruta opcional
Route::get('utgz/{nombre?}',function($nombre="Por favor inserta un valor."){
	return "Hola ".$nombre;
});
Route::get('ejemplo',function(){
	return view('ejemplo');
});
Route::get('wix',function(){
	return view('wix.wix');
})->name("wix");
Route::get('tienda',function(){
	return view('wix.tienda');
})->name("tienda");

Route::get('tienda/detalles',function(){
	return view('wix.detalles');
})->name('detallesProducto');

Route::resource('categorias','CategoriasController');

Route::resource('usuarios','usersControlle');

Route::resource('productos','ProductosController');

Route::resource('roles','RolesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
