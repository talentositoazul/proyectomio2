@extends('layout.master')
@section('content')
<h1> Bienvenido,</h1>
@if(Auth::check())
{{Auth::user()->email}}
@endif
<br>
<a href="auth/logout">cerrar sesion</a>>
@endsection