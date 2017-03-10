<?php

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

Route::get('cinema', function(){
    return view('crear_pelicula');
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

//Proyecto//




