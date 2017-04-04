<?php


/**@file(esta es la vista de actualizar aprendiz)
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
    @param Variables y funciones de los Id   */

?>

@Extends ('layout.master')
@Section('content')
<h1> actualizar aprendiz </h1>
<form method='Post' action="{{url('actualizar',$alumno->Id_aprendiz)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$alumno->Id_aprendiz}}"> 
</td>
    <td>Nombre <input type ="text" name="Nombre" Value="{{$alumno->Nombre}}"> </td>
    <td>Apellido <input type ="text" name="Apellido" Value="{{$alumno->Apellido}}"> </td>
    <td>Identificacion <input type ="text" name="Identificacion" Value="{{$alumno->Identificacion}}"> </td>
    <td>Telefono <input type ="text" name="Telefono" Value="{{$alumno->Telefono}}"> </td>
    <td>Correo <input type ="text" name="Correo" Value="{{$alumno->Correo}}"> </td>
    <td>Direccion <input type ="text" name="Direccion" Value="{{$alumno->Direccion}}"> </td>
    <td>Genero <input type ="text" name="Genero" Value="{{$alumno->Genero}}"> </td>
  </tr>


</table>


<input type ="Submit" name="actualizar aprendiz"> 
</form>
@endsection

