<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Región(es)</th>
			<th>Macrozona(s)</th>
		</tr>
	</thead>
	<tbody>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@foreach($user->regiones as $region)
			{{ $region->name }}
			@endforeach
		</td>
		<td>
			<ul>
			@foreach($seccionesUser as $seccion)
				<li>
				{{ $seccion->name }}
				</li>
			@endforeach
			</ul>
		</td>
	</tbody>
</table>
<hr>
<h3>Secciones</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($secciones as $seccion)
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
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
