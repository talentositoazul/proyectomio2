<?php
//@file(controlador de referencia)//
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\referencia;

class referenciacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    

    @brief funcion index en referenciacontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar */

    public function index()
    {
        $referencias=referencia::all();
        return view ('listarreferencia',compact('referencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
  

    @brief funcion editar en referenciacontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar junto con los Id*/

    public function editar($Id_referencia)
    {
          
        $referencias=referencia::FindOrFail($Id_referencia);
        return view ('actualizar_referencia',compact('referencias'));
    }
    
    /**
    @brief funcion actualizar en referenciacontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder actualizar registros, junto con los Id */

    public function actualizar($Id_referencia)
    {
        $referencias=referencia::FindOrFail($Id_referencia);
        
        $data=request()->all();
        
        $referencias->fill($data)->save();

        return redirect()->to('referencia');
    }
    
    /**
    @brief funcion eliminar en referenciacontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder eliminar registros */

      public function eliminar($Id_referencia)
    {
        $referencias=proveedor::FindOrFail($Id_referencia);
        
        $data=request()->all();
        
        $referencias->delete();

        return redirect()->to('referencia');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
