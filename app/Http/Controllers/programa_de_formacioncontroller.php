<?php

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
     */
    public function index()
    {
        $formacion=programa_de_formacion::all();
        return view ('listarprograma_de_formacion',compact('formacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($Id_programa_de_formacion)
    {
          
        $formacion=programa_de_formacion::FindOrFail($Id_programa_de_formacion);
        return view ('actualizar_programa_de_formacion',compact('formacion'));
    }
    
    public function actualizar($Id_programa_de_formacion)
    {
        $formacion=programa_de_formacion::FindOrFail($Id_programa_de_formacion);
        
        $data=request()->all();
        
        $formacion->fill($data)->save();

        return redirect()->to('programa_de_formacion');
    }
    
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
