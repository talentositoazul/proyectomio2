
<?php
/**@file(Esta es la vista de listar aprendiz)
  @brief:Id de los campos para editar la tabla aprendiz 
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
  @param Variables y funciones de los Id   */

?>

@extends ('layout.master')
@section('content')
<ul>
@foreach($alumno as $aprendiz)
<li>
{{$aprendiz->Id_aprendiz}}
{{$aprendiz->Nombre}}
{{$aprendiz->Apellido}}
{{$aprendiz->Identificacion}}
{{$aprendiz->Telefono}}
{{$aprendiz->Correo}}
{{$aprendiz->Direccion}}
{{$aprendiz->Genero}}

<a href="{{url('editar',$aprendiz->Id_aprendiz)}}">editar Aprendiz </a>

<a href="{{url('eliminar',$aprendiz->Id_aprendiz)}}">eliminar Aprendiz </a>

</li>
@endforeach
<ul>
@endsection