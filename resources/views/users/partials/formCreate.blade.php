<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('cargo', 'Cargo') }}
	{{ Form::text('cargo', null, ['class' => 'form-control', 'id' => 'cargo']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<!--
<div class="form-group">
	{{ Form::label('region_id', 'Región') }}
	{{ Form::select('region_id', $regions, null, array('class' => 'form-control' , 'id' => 'region')) }}
</div>
-->
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
<h3>Rol</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
		        {{ Form::checkbox('roles[]', $role->id, null) }}
		        {{ $role->name }}
		        <em>({{ $role->description ?: 'Sin descripción' }})</em>
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
<hr>
<h3>Macrozonas</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($macrozonas as $macrozona)
		<li>
			<label>
		        {{ Form::checkbox('macrozonas[]', $macrozona->id) }}
		        <strong>{{ $macrozona->name }}</strong> > <strong>{{ $macrozona->rubro->name}}</strong>
		        
	        </label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>