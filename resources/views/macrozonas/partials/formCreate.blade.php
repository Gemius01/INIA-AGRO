<div class="form-group">
	{{ Form::label('name', 'Nombre de la Macrozona') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Región') }}
	{!! Form::select('region', $regiones, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{{ Form::label('region', 'Seleccione Rubro') }}
	{!! Form::select('rubro', $rubros, null, ['class' => 'form-control', 'placeholder' => 'Pick a size...']) !!}
</div>

<center>
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
		
	</div>
</center>