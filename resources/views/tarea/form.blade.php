
<h1>{{ $modo }} tarea</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
    @endforeach
</ul>
    </div>

@endif


<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($tarea->Nombre)?$tarea->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
<label for="FechaDeInicio">Fecha de Inicio</label>
<input type="date" class="form-control" name="FechaDeInicio" value="{{ isset($tarea->FechaDeInicio)?$tarea->FechaDeInicio:old('FechaDeInicio') }}" id="FechaDeInicio">
</div>

<div class="form-group">
<label for="FechaFin">Fecha Fin</label>
<input type="date" class="form-control" name="FechaFin" value="{{ isset($tarea->FechaFin)?$tarea->FechaFin:old('FechaFin') }}" id="FechaFin">
</div>

<div class="form-group">
<label for="Estado">Estado</label>
<input type="text" class="form-control" name="Estado" value="{{ isset($tarea->Estado)?$tarea->Estado:old('Estado') }}" id="Estado">
</div>
<input class="btn btn-success" type="submit" value="{{ $modo }} Tarea">

<a class="btn btn-primary" href="{{ url('tarea/') }}">Regresar</a>

<br>