<?php

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
     */
    public function index()
    {
        $alumno=aprendiz::all();
        return view ('listaraprendiz',compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($Id_aprendiz)
    {
          
        $alumno=aprendiz::FindOrFail($Id_aprendiz);
        return view ('actualizar_aprendiz',compact('alumno'));
    }
    
    public function actualizar($Id_aprendiz)
    {
        $alumno=aprendiz::FindOrFail($Id_aprendiz);
        
        $data=request()->all();
        
        $alumno->fill($data)->save();

        return redirect()->to('aprendiz');
    }

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
