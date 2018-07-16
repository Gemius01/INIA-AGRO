<div class="form-group">
	{{ Form::label('name', 'Nombre del rubro') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
	@if($errors->has('name'))
	@foreach($errors->get('name',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

</div>
