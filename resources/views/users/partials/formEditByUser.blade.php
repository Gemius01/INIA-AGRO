<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	@if($errors->has('name'))
	@foreach($errors->get('name',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('cargo', 'Cargo') }}
	{{ Form::text('cargo', null, ['class' => 'form-control', 'id' => 'cargo']) }}
	@if($errors->has('cargo'))
	@foreach($errors->get('cargo',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('cri', 'CRI') }}
	{{ Form::text('cri', null, ['class' => 'form-control', 'id' => 'cargo']) }}
	@if($errors->has('cri'))
	@foreach($errors->get('cri',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
	@if($errors->has('email'))
	@foreach($errors->get('email',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>
</div>
