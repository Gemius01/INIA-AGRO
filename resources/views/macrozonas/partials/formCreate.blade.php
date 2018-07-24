<div class="form-group">
	{{ Form::label('name', 'Nombre de la Macrozona') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Región') }}
	{!! Form::select('region', $regiones, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{{ Form::label('region', 'Seleccione Rubro (Opcional)') }}
	{!! Form::select('rubro', $arrayRubros, null, ['class' => 'form-control', 'placeholder' => 'Elige un Rubro']) !!}
</div>


<center>
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
		
	</div>
</center>