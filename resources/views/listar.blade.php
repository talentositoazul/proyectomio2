@extends ('layout.master')
@section('content')
<ul>
@foreach($pelis as $movies)
<li>
{{$movies->Id}}
{{$movies->Titulo}}
{{$movies->Genero}}
{{$movies->Protagonista}}
{{$movies->Idioma}}
{{$movies->Duracion}}

<a href="{{url('editar',$movies->Id)}}">editar Pelicula </a>

<a href="{{url('eliminar',$movies->Id)}}">eliminar Pelicula </a>

</li>
@endforeach
<ul>
@endsection