@extends ('layout.master')
@section('content')
<ul>
@foreach($alumno as $aprendiz)
<li>
{{$aprendiz->Id_aprendiz}}
{{$aprendiz->Nombre}}
{{$aprendiz->Apellido}}
{{$aprendiz->Identificacion}}
{{$aprendiz->Telefono}}
{{$aprendiz->Correo}}
{{$aprendiz->Direccion}}
{{$aprendiz->Genero}}

<a href="{{url('editar',$aprendiz->Id_aprendiz)}}">editar Aprendiz </a>

<a href="{{url('eliminar',$aprendiz->Id_aprendiz)}}">eliminar Aprendiz </a>

</li>
@endforeach
<ul>
@endsection