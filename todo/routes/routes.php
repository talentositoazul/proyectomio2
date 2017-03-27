<?php
	/**@file(Rutas)
  	@date:24/03/2017
	@author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
   @param Variables y funciones de los Id          
   @return Creados para volver al inicio despues de sus procesos,funciones y metodos. */		
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return view('home');
});

/*Route::post('crear_pelicula','PeliculasController@guardar');

Route::get('listar','PeliculasController@index');

Route::get('editar/{Id}','PeliculasController@editar');

Route::post('actualizar/{Id}','PeliculasController@actualizar');

Route::get('eliminar/{Id}','PeliculasController@eliminar');
*/


//Proyecto//
//Rutas aprendiz//
Route::get('aprendiz','aprendizController@index');

Route::get('editar/{Id_aprendiz}','aprendizController@editar');

Route::post('actualizar/{Id_aprendiz}','aprendizController@actualizar');

Route::get('eliminar/{Id_aprendiz}','aprendizController@eliminar');
//Rutas aprendiz//


//Rutas productos//
Route::get('productos','productosController@index');

Route::get('editarproductos/{Id_productos}','productosController@editar');

Route::post('actualizarproductos/{Id_productos}','productosController@actualizar');

Route::get('eliminarproductos/{Id_productos}','productosController@eliminar');
//Rutas productos//



//Rutas programa de formacion//
Route::get('programa_de_formacion','programa_de_formacioncontroller@index');

Route::get('editarprograma_de_formacion/{Id_programa_de_formacion}','programa_de_formacionController@editar');

Route::post('actualizarprograma_de_formacion/{Id_programa_de_formacion}','programa_de_formacionController@actualizar');

Route::get('eliminarprograma_de_formacion/{Id_programa_de_formacion}','programa_de_formacionController@eliminar');
//Rutas programa de formacion//


//Rutas proveedor//
Route::get('proveedor','proveedorcontroller@index');

Route::get('editarproveedor/{Id_proveedor}','proveedorController@editar');

Route::post('actualizarproveedor/{Id_proveedor}','proveedorController@actualizar');

Route::get('eliminarproveedor/{Id_proveedor}','proveedorController@eliminar');
//Rutas proveedor//

//Rutas referencia//
Route::get('referencia','referenciacontroller@index');

Route::get('editarreferencia/{Id_referencia}','referenciaController@editar');

Route::post('actualizarreferencia/{Id_referencia}','referenciaController@actualizar');

Route::get('eliminarreferencia/{Id_referencia}','referenciaController@eliminar');
//Rutas referencia//

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Proyecto//



