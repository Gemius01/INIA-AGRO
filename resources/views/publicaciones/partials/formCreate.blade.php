<div class="form-group">
	{{ Form::label('region', 'Seleccione Región(es)') }}
	{!! Form::select('region', $regiones, 0, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('name', 'Mes de la Publicación') }}
	{{ Form::text('mes', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Año de la Publicación') }}
	{{ Form::text('año', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	
</div>
