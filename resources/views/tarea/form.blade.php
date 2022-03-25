<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ $tarea->Nombre }}" id="Nombre">
<br>
<label for="FechaDeInicio">Fecha de Inicio</label>
<input type="date" name="FechaDeInicio" value="{{ $tarea->FechaDeInicio }}" id="FechaDeInicio">
<br>
<label for="FechaFin">Fecha Fin</label>
<input type="date" name="FechaFin" value="{{ $tarea->FechaFin }}" id="FechaFin">
<br>
<label for="Estado">Estado</label>
<input type="text" name="Estado" value="{{ $tarea->Estado }}" id="Estado">
<br>
<input type="submit" value="Guardar Tarea">
<br>