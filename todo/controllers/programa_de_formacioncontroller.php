<?php
//@file(controlador de programa de formacion)//
//@date:24/03/2017
  /**@author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera */
  //@param Variables y funciones de los Id      
   //@return Se devuelve al listar el programa de formacion al formato inicial.             
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\programa_de_formacion;

class programa_de_formacioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
  

    @brief funcion index en programa_de_formacion_controller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar */

    public function index()
    {
        $formacion=programa_de_formacion::all();
        return view ('listarprograma_de_formacion',compact('formacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     

    @brief funcion editar en programa_de_formacion_controller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder editar registros */

    public function editar($Id_programa_de_formacion)
    {
          
        $formacion=programa_de_formacion::FindOrFail($Id_programa_de_formacion);
        return view ('actualizar_programa_de_formacion',compact('formacion'));
    }
    
    /**
    @brief funcion actualizar en programa_de_formacion_controller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder editar registros y actualizar */

    public function actualizar($Id_programa_de_formacion)
    {
        $formacion=programa_de_formacion::FindOrFail($Id_programa_de_formacion);
        
        $data=request()->all();
        
        $formacion->fill($data)->save();

        return redirect()->to('programa_de_formacion');
    }
    
    /**
    @brief funcion eliminar en programa_de_formacion_controller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder eliminar registros y eliminar */

      public function eliminar($Id_programa_de_formacion)
    {
        $formacion=programa_de_formacion::FindOrFail($Id_programa_de_formacion);
        
        $data=request()->all();
        
        $formacion->delete();

        return redirect()->to('programa_de_formacion');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
