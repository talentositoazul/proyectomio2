<?php


/**@file(Esta es la vista de actualizar referencia)
  @date:24/03/2017
  @author:Steven Lozano
             Cristhian Rodriguez
             Robinson Barrera 
    @param Variables y funciones de los Id   */

?>


@Extends ('layout.master')
@Section('content')
<h1> actualizar referencia </h1>
<form method='Post' action="{{url('actualizarreferencia',$referencias->Id_referencia)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$referencias->Id_referencia}}"> 
</td>
    <td>Descripcion <input type ="text" name="Descripcion" Value="{{$referencias->Descripcion}}"> </td>
    
  </tr>


</table>


<input type ="Submit" name="Actualizar referencia"> 
</form>
@endsection


