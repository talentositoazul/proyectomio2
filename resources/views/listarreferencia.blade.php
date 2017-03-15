@extends ('layout.master')
@section('content')
<ul>
@foreach($referencias as $referir)
<li>
{{$referir->Id_referencia}}
{{$referir->Descripcion}}

<a href="{{url('editarreferencia',$referir->Id_referencia)}}">editar Referencia </a>

<a href="{{url('eliminarreferencia',$referir->Id_referencia)}}">eliminar Referencia </a>

</li>
@endforeach
<ul>
@endsection