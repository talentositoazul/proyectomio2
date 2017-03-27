<?php
/**@file(Esta es la vista de listar referencia)
  @brief:Id de los campos para editar la tabla referencia
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
  @param Variables y funciones de los Id   */

?>


@extends ('layout.master')
@section('content')
<ul>
@foreach($referencias as $referir)
<li>
{{$referir->Id_referencia}}
{{$referir->Descripcion}}

<a href="{{url('editarreferencia',$referir->Id_referencia)}}">editar Referencia </a>

<a href="{{url('eliminarreferencia',$referir->Id_referencia)}}">eliminar Referencia </a>

</li>
@endforeach
<ul>
@endsection