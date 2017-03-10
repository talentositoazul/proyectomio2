@Extends ('layout.master')
@Section('content')
<h1> actualizar productos </h1>
<form method='Post' action="{{url('actualizar',$alumno->Id_productos)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$alumno->Id_productos}}"> 
</td>
    <td>Referencia <input type ="text" name="Referencia" Value="{{$alumno->Referencia}}"> </td>
    <td>Categoria <input type ="text" name="Categoria" Value="{{$alumno->Categoria}}"> </td>
    <td>Precio <input type ="text" name="Identificacion" Value="{{$alumno->Identificacion}}"> </td>
  </tr>


</table>


<input type ="Submit" name="actualizar Producto"> 
</form>
@endsection

