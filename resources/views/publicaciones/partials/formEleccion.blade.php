<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>Mes</th>
      <th>Año</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $publicacion->mes->nombre }}</td>
      <td>{{ $publicacion->año }}</td>
    </tr>
  </tbody>
</table>
<div class="form-group">
  <center>
  <a href="{{ route('publicaciones.index') }}" class="btn btn-sm btn-info">Cancelar</a>
  <center>
  <button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
  </center>
  </center>
</div>
