<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peliculas;
class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar()
    {
        $data=Request()->all();
        Peliculas::create($data);
    }


    public function index()
    {
        $pelis=Peliculas::all();
        return view ('listar',compact('pelis'));
    }

      public function editar($Id)
    {
        $pelis=Peliculas::FindOrFail($Id);
        return view ('actualizar',compact('pelis'));
    }

      public function actualizar($Id)
    {
        $pelis=Peliculas::FindOrFail($Id);
        
        $data=request()->all();
        
        $pelis->fill($data)->save();

        return redirect()->to('listar');
    }

    public function eliminar($Id)
    {
        $pelis=Peliculas::FindOrFail($Id);
        
        $data=request()->all();
        
        $pelis->delete();

        return redirect()->to('listar');
    }


}
