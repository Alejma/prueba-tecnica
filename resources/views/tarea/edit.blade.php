@extends('layouts.app')
@section('content')
<div class="container">

<form method="post" action="{{ url('/tarea/'.$tarea->id ) }}">
@csrf
{{ method_field('PATCH') }} 
    


@include('tarea.form', ['modo'=>'Editar']);
</form>
</div>
@endsection