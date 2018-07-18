<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>Mes</th>
      <th>Año</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $publicacion->mes }}</td>
      <td>{{ $publicacion->año }}</td>
    </tr>
  </tbody>
</table>
<div class="form-group">
  <center>
  <a href="{{ route('publicaciones.index') }}" class="btn btn-sm btn-info">Cancelar</a>
  {{ Form::submit('Elegir', ['class' => 'btn btn-sm btn-success']) }}
  </center>
</div>
