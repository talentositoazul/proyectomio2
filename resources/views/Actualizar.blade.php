@Extends ('layout.master')
@Section('content')
<h1> actualizar Pelicula </h1>
<form method='Post' action="{{url('actualizar',$pelis->Id)}}">
{!!csrf_field()!!}
<input type ="text" name="Id" Value="{{$pelis->Id}}"> 
<input type ="text" name="Titulo" Value="{{$pelis->Titulo}}"> 
<input type ="text" name="Genero" Value="{{$pelis->Genero}}"> 
<input type ="text" name="Protagonista" Value="{{$pelis->Protagonista}}"> 
<input type ="text" name="Idioma" Value="{{$pelis->Idioma}}"> 
<input type ="text" name="Duracion" Value="{{$pelis->Duracion}}"> 

<input type ="Submit" name="actualizar Producto"> 
</form>
@endsection

