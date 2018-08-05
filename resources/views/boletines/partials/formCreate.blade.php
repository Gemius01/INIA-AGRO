<div class="form-group">
	{{ Form::label('region', 'Seleccione Región(es)') }}
	{!! Form::select('region', $regiones, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('fecha', 'Fecha') }}
	{{ Form::date('fecha', new \DateTime(), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
