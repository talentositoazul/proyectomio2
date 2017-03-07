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

Route::post('crear_pelicula','PeliculasController@guardar');

Route::get('listar','PeliculasController@index');

Route::get('editar/{Id}','PeliculasController@editar');

Route::post('actualizar/{Id}','PeliculasController@actualizar');

Route::get('eliminar/{Id}','PeliculasController@eliminar');



//Proyecto//

Route::get('aprendiz','aprendizController@index');

Route::get('editar/{Id}','aprendizController@editar');

Route::post('actualizar/{Id}','aprendizController@actualizar');

Route::get('eliminar/{Id}','aprendizController@eliminar');


//Proyecto//




