<?php
/**@file(Esta es la vista de listar proveedor)
  @brief:Id de los campos para editar la tabla proveedor
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
  @param Variables y funciones de los Id   */

?>

@extends ('layout.master')
@section('content')
<ul>
@foreach($provee as $proveedores)
<li>
{{$proveedores->Id_proveedor}}
{{$proveedores->Nombre}}
{{$proveedores->Apellido}}
{{$proveedores->Direccion}}
{{$proveedores->Telefono}}
{{$proveedores->Correo}}
{{$proveedores->Fax}}
{{$proveedores->Identificacion}}




<a href="{{url('editarproveedor',$proveedores->Id_proveedor)}}">editar Proveedor </a>

<a href="{{url('eliminarproveedor',$proveedores->Id_proveedor)}}">eliminar Proveedor </a>

</li>
@endforeach
<ul>
@endsection