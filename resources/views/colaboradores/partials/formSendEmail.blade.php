<h5><strong>TUS DATOS DE GMAIL</strong></h5>
<hr>
<div class="form-group">
	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
	@if($errors->has('email'))
	@foreach($errors->get('email',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', ['class' => 'form-control']) }}
	@if($errors->has('password'))
	@foreach($errors->get('password',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<hr>
<h5><strong>E-MAIL</strong></h5>
<hr>
<div class="form-group">
	{{ Form::label('asunto', 'Asunto') }}
	{{ Form::text('asunto', null, ['class' => 'form-control']) }}
	@if($errors->has('asunto'))
	@foreach($errors->get('asunto',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('contenido', 'Contenido') }}
	{{ Form::textarea('contenido', null, ['class' => 'form-control', 'rows' => 7, 'cols' => 40]) }}
	@if($errors->has('contenido'))
	@foreach($errors->get('contenido',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<hr>
<center>
	<div class="form-group">
		<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Enviar</button>
	</center>
	</div>
</center>
