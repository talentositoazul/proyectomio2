<?php
/**@file(Esta es la vista de listar programa_de_formacion)
  @brief:Id de los campos para editar la tabla programa_de_formacion
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
  @param Variables y funciones de los Id   */

?>


@extends ('layout.master')
@section('content')
<ul>
@foreach($formacion as $formaciones)
<li>
{{$formaciones->Id_programa_de_formacion}}
{{$formaciones->Descripcion}}



<a href="{{url('editarprograma_de_formacion',$formaciones->Id_programa_de_formacion)}}">editar Programa de formacion </a>

<a href="{{url('eliminarprograma_de_formacion',$formaciones->Id_programa_de_formacion)}}">eliminar Programa de formacion </a>

</li>
@endforeach
<ul>
@endsection