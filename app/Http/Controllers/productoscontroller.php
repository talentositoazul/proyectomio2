<?php

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
     */
    public function index()
    {
        $producto=productos::all();
        return view ('listarproductos',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($Id_productos)
    {
          
        $producto=productos::FindOrFail($Id_productos);
        return view ('actualizar_productos',compact('producto'));
    }
    
    public function actualizar($Id_productos)
    {
        $producto=productos::FindOrFail($Id_productos);
        
        $data=request()->all();
        
        $producto->fill($data)->save();

        return redirect()->to('productos');
    }
    
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
