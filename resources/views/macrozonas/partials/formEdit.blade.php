<div class="form-group">
	{{ Form::label('name', 'Nombre de la Macrozona') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Región') }}
	{!! Form::select('region_id', $regiones, $macrozona->region_id, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Rubro') }}
	{!! Form::select('rubro_id', $rubros, $macrozona->rubro_id, ['class' => 'form-control']) !!}
</div>

<center>
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
		
	</div>
</center>