<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Región(es)</th>
			<th>Sección(es)</th>
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

<h3>Secciones</h3>
<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
	<tr>
		<th style="text-align: center;">Check</th>
		<th>Sección</th>
	</tr>
	</thead>
	<tbody>
		 @foreach($secciones as $seccion)
		 <tr>
			<td style="text-align: center;">{{ Form::checkbox('secciones[]', $seccion->id, null) }}</td>
			<td>{{ $seccion->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
<div class="form-group">
	<center>
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</center>
</div>
