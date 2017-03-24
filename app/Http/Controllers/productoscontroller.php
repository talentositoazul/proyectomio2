<?php
//@file(controlador de productos)//
//@date:24/03/2017
  /**@author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera */
   //@param Variables y funciones de los Id      
    //@return Se devuelve al listar los productos al formato inicial.            
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\productos;

class productoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     

    @brief funcion index en productoscontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar */

    public function index()
    {
        $producto=productos::all();
        return view ('listarproductos',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    @brief funcion editar en productoscontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar junto con los Id*/

    public function editar($Id_productos)
    {
          
        $producto=productos::FindOrFail($Id_productos);
        return view ('actualizar_productos',compact('producto'));
    }
    
    /**
    @brief funcion actualizar en productoscontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder actualizar registros, junto con los Id */

    public function actualizar($Id_productos)
    {
        $producto=productos::FindOrFail($Id_productos);
        
        $data=request()->all();
        
        $producto->fill($data)->save();

        return redirect()->to('productos');
    }
    
    /**
    @brief funcion eliminar en productoscontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder eliminar registros */

      public function eliminar($Id_productos)
    {
        $producto=productos::FindOrFail($Id_productos);
        
        $data=request()->all();
        
        $producto->delete();

        return redirect()->to('productos');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
