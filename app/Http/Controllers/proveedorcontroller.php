<?php

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
     */
    public function index()
    {
        $provee=proveedor::all();
        return view ('listarproveedor',compact('provee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($Id_proveedor)
    {
          
        $provee=proveedor::FindOrFail($Id_proveedor);
        return view ('actualizar_proveedor',compact('provee'));
    }
    
    public function actualizar($Id_proveedor)
    {
        $provee=proveedor::FindOrFail($Id_proveedor);
        
        $data=request()->all();
        
        $provee->fill($data)->save();

        return redirect()->to('proveedor');
    }
    
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
