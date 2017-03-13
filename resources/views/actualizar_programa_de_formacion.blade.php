@Extends ('layout.master')
@Section('content')
<h1> actualizar programa_de_formacion </h1>
<form method='Post' action="{{url('actualizarprograma_de_formacion',$formacion->Id_programa_de_formacion)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id <input type ="text" name="Id" Value="{{$formacion->Id_programa_de_formacion}}"> 
</td>
    <td>Descripcion <input type ="text" name="Descripcion" Value="{{$formacion->Descripcion}}"> </td>
    
  </tr>


</table>


<input type ="Submit" name="Actualizar programa de formacion"> 
</form>
@endsection


