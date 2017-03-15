@extends ('layout.master')
@section('content')
<ul>
@foreach($provee as $proveedores)
<li>
{{$proveedores->Id_proveedor}}
{{$proveedores->Nombre}}
{{$proveedores->Apellido}}
{{$proveedores->Direccion}}
{{$proveedores->Telefono}}
{{$proveedores->Correo}}
{{$proveedores->Fax}}
{{$proveedores->Identificacion}}




<a href="{{url('editarproveedor',$proveedores->Id_proveedor)}}">editar Proveedor </a>

<a href="{{url('eliminarproveedor',$proveedores->Id_proveedor)}}">eliminar Proveedor </a>

</li>
@endforeach
<ul>
@endsection