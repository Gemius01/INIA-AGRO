<!--
<div class="form-group">
	{{ Form::label('region', 'Seleccione Región(es)') }}
	{!! Form::select('region', $regiones, 0, ['class' => 'form-control']) !!}
</div>
-->
<div class="form-group">
	{{ Form::label('name', 'Mes de la Publicación') }}
	{!! Form::select('mes_id', $meses, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('name', 'Año de la Publicación') }}
	{{ Form::number('año', null, ['class' => 'form-control']) }}
	@if($errors->has('año'))
	@foreach($errors->get('año',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

</div>
