@Extends ('layout.master')
@Section('content')
<h1> actualizar productos </h1>
<form method='Post' action="{{url('actualizarproductos',$producto->Id_productos)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$producto->Id_productos}}"> 
</td>
    <td>Referencia <input type ="text" name="Referencia" Value="{{$producto->Referencia}}"> </td>
    <td>Categoria <input type ="text" name="Categoria" Value="{{$producto->Categoria}}"> </td>
    <td>Precio <input type ="text" name="Precio" Value="{{$producto->Precio}}"> </td>
  </tr>


</table>


<input type ="Submit" name="actualizar Producto"> 
</form>
@endsection


