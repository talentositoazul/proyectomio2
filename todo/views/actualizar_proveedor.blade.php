<?php


/**@file(Esta es la vista de actualizar proveedor)
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
    @param Variables y funciones de los Id   */

?>




@Extends ('layout.master')
@Section('content')
<h1> actualizar proveedor </h1>
<form method='Post' action="{{url('actualizarproveedor',$provee->Id_proveedor)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$provee->Id_proveedor}}"> 
</td>
    <td>Nombre <input type ="text" name="Nombre" Value="{{$provee->Nombre}}"> </td>
    <td>Apellido <input type ="text" name="Apellido" Value="{{$provee->Apellido}}"> </td>
    <td>Direccion <input type ="text" name="Direccion" Value="{{$provee->Direccion}}"> </td>
    <td>Telefono <input type ="text" name="Telefono" Value="{{$provee->Telefono}}"> </td>
    <td>Correo <input type ="text" name="Correo" Value="{{$provee->Correo}}"> </td>
    <td>Fax <input type ="text" name="Fax" Value="{{$provee->Fax}}"> </td>
    <td>Identificacion <input type ="text" name="Identificacion" Value="{{$provee->Identificacion}}"> </td>
  </tr>


</table>


<input type ="Submit" name="actualizar Producto"> 
</form>
@endsection

