<h6><strong>Tu contraseña de Gmail (Correo que se enviará al colaborador agregado)</strong></h6>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
</div>
<hr>
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
	{{ Form::text('cri', null, ['class' => 'form-control', 'id' => 'cri']) }}
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

<hr>
<h3>Rol</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
		        {{ Form::radio('roles[]', $role->id, null) }}
		        {{ $role->name }}
		        <em>({{ $role->description ?: 'Sin descripción' }})</em>
	        </label>
		</li>
		@endforeach
	</ul>
	@if($errors->has('roles'))
	@foreach($errors->get('roles',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<hr>
<h3>Región(es)</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($regions as $region)
		<li>
			<label>
		        {{ Form::checkbox('regions[]', $region->id, null) }}
		        {{ $region->name }}
	        </label>
		</li>
		@endforeach
	</ul>
</div>
<hr>
<h3>Secciones</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($seccions as $seccion)
		<li>
			<label>
		        {{ Form::checkbox('secciones[]', $seccion->id) }}
		        {{ $seccion->name }}

	        </label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>
</div>
