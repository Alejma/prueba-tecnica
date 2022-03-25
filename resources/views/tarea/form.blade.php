
<h1>{{$modo }} tarea</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ isset($tarea->Nombre)?$tarea->Nombre:'' }}" id="Nombre">
<br>
<label for="FechaDeInicio">Fecha de Inicio</label>
<input type="date" name="FechaDeInicio" value="{{ isset($tarea->FechaDeInicio)?$tarea->FechaDeInicio:'' }}" id="FechaDeInicio">
<br>
<label for="FechaFin">Fecha Fin</label>
<input type="date" name="FechaFin" value="{{ isset($tarea->FechaFin)?$tarea->FechaFin:'' }}" id="FechaFin">
<br>
<label for="Estado">Estado</label>
<input type="text" name="Estado" value="{{ isset($tarea->Estado)?$tarea->Estado:'' }}" id="Estado">
<br>
<input type="submit" value="{{ $modo }} Tarea">

<a href="{{ url('tarea/') }}">Regresar</a>

<br>