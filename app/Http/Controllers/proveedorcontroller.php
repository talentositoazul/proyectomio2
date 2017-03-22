<?php
//@file(controlador de proveedor)//
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\proveedor;

class proveedorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     

    @brief funcion index en proveedordcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar */


    public function index()
    {
        $provee=proveedor::all();
        return view ('listarproveedor',compact('provee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     

    @brief funcion editar en proveedorcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder listar junto con los Id*/

    public function editar($Id_proveedor)
    {
          
        $provee=proveedor::FindOrFail($Id_proveedor);
        return view ('actualizar_proveedor',compact('provee'));
    }
    

    /**
    @brief funcion actualizar en proveedorcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder actualizar registros, junto con los Id */

    public function actualizar($Id_proveedor)
    {
        $provee=proveedor::FindOrFail($Id_proveedor);
        
        $data=request()->all();
        
        $provee->fill($data)->save();

        return redirect()->to('proveedor');
    }
    

    /**
    @brief funcion eliminar en proveedorcontroller que muestra el inicio del controlador y variables
    que se nombran para relacionar con rutas metodos y clases, para poder eliminar registros */

      public function eliminar($Id_proveedor)
    {
        $provee=proveedor::FindOrFail($Id_proveedor);
        
        $data=request()->all();
        
        $provee->delete();

        return redirect()->to('proveedor');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
