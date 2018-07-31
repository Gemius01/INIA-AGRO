<div class="form-group">
	{{ Form::label('name', 'Nombre de la Macrozona') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
	@if($errors->has('name'))
	@foreach($errors->get('name',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Región') }}
	{!! Form::select('region_id', $regiones, $macrozona->region_id, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('region', 'Seleccione Rubro') }}
	{!! Form::select('rubro_id', $arrayRubros, $macrozona->rubro_id, ['class' => 'form-control', 'placeholder' => 'Ninguno']) !!}
</div>

<center>
	<div class="form-group">
		<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>

	</div>
</center>
