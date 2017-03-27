<?php
/**@file(Esta es la vista de listar productos)
  @brief:Id de los campos para editar la tabla productos 
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
  @param Variables y funciones de los Id   */

?>



@extends ('layout.master')
@section('content')
<ul>
@foreach($producto as $productos)
<li>
{{$productos->Id_productos}}
{{$productos->Referencia}}
{{$productos->Categoria}}
{{$productos->Precio}}


<a href="{{url('editarproductos',$productos->Id_productos)}}">editar Producto </a>

<a href="{{url('eliminarproductos',$productos->Id_productos)}}">eliminar Producto </a>

</li>
@endforeach
<ul>
@endsection