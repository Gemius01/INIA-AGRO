<div class="form-group">
	{{ Form::label('nombre', 'Nombre de la Comuna') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
	@if($errors->has('nombre'))
	@foreach($errors->get('nombre',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('codigo', 'Código Comuna') }}
	{{ Form::number('codigo', null, ['class' => 'form-control']) }}
	@if($errors->has('codigo'))
	@foreach($errors->get('codigo',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('region_id', 'Seleccione Región') }}
	{!! Form::select('region_id', $regiones, null, ['class' => 'form-control']) !!}
</div>

<center>
	<div class="form-group">
		<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>
	</div>
</center>