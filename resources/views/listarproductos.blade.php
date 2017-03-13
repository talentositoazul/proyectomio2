@extends ('layout.master')
@section('content')
<ul>
@foreach($producto as $productos)
<li>
{{$productos->Id_productos}}
{{$productos->Referencia}}
{{$productos->Categoria}}
{{$productos->Precio}}


<a href="{{url('editarproductos',$productos->Id_productos)}}">editar Producto </a>

<a href="{{url('eliminarproductos',$productos->Id_productos)}}">eliminar Producto </a>

</li>
@endforeach
<ul>
@endsection