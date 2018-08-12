<div class="form-group">
	{{ Form::label('name', 'Nombre de la Región') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
	@if($errors->has('name'))
	@foreach($errors->get('name',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('numero', 'Número de la Región') }}
	{{ Form::text('numero', null, ['class' => 'form-control']) }}
	@if($errors->has('numero'))
	@foreach($errors->get('numero',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>
</div>
