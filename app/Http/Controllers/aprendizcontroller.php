<?php
/**@file(controlador de aprendiz)*/
  //@date:24/03/2017
  /**@author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera */
    //@param Variables y funciones de los Id      
     //@return Se devuelve al listar los aprendices al formato inicial.           

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\aprendiz;

class aprendizcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
    @brief funcion index en aprendizcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases */ 


    public function index()
    {
        $alumno=aprendiz::all();
        return view ('listaraprendiz',compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    
   @brief funcion editar en aprendizcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases editando los id y relacionando con la base de datos*/

    public function editar($Id_aprendiz)
    {
          
        $alumno=aprendiz::FindOrFail($Id_aprendiz);
        return view ('actualizar_aprendiz',compact('alumno'));
    }


    /** 
    @brief funcion actualizar en aprendizcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases , para poder actualizar
    registros ya consultados en la base de datos*/

    public function actualizar($Id_aprendiz)
    {
        $alumno=aprendiz::FindOrFail($Id_aprendiz);
        
        $data=request()->all();
        
        $alumno->fill($data)->save();

        return redirect()->to('aprendiz');
    }

    /**
    s@brief funcion eliminar en aprendizcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, en caso de equivocacion 
    se pueden eliminar registros en el inicio junto con Id */

    public function eliminar($Id_aprendiz)
    {
        $alumno=aprendiz::FindOrFail($Id_aprendiz);
        
        $data=request()->all();
        
        $alumno->delete();

        return redirect()->to('aprendiz');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}

