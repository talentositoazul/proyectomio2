@extends ('layout.master')
@section('content')
<ul>
@foreach($formacion as $formaciones)
<li>
{{$formaciones->Id_programa_de_formacion}}
{{$formaciones->Descripcion}}



<a href="{{url('editarprograma_de_formacion',$formaciones->Id_programa_de_formacion)}}">editar Programa de formacion </a>

<a href="{{url('eliminarprograma_de_formacion',$formaciones->Id_programa_de_formacion)}}">eliminar Programa de formacion </a>

</li>
@endforeach
<ul>
@endsection