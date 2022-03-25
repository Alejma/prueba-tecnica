@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{ url('/tarea') }}">
@csrf
@include('tarea.form', ['modo'=>'Crear'] );
  
</form>
</div>
@endsection