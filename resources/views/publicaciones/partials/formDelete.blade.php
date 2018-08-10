<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>Mes</th>
      <th>Año</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $findPublicacion->mes->nombre }}</td>
      <td>{{ $findPublicacion->año }}</td>
    </tr>
  </tbody>
</table>
<div class="form-group">
  {{ Form::label('password', 'Contraseña') }}
  {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
  
</div>
<hr>
<div class="form-group">
  
  <a href="{{ route('publicaciones.index') }}" class="btn btn-sm btn-info pull-right" style="margin-left:5px;">Cancelar</a>
  
  <button type="submit"  class="btn btn-sm btn-danger pull-right" style="margin-left:5px;" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Eliminar</button>

  
</div>
