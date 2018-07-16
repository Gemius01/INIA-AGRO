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
			@foreach($macrozonasUser as $macrozona)
				<li>
				{{ $macrozona->name }}
				</li>
			@endforeach
			</ul>
		</td>
	</tbody>
</table>
<hr>
<h3>Macrozonas</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($macrozonas as $macrozona)
		<li>
			<label>
		        {{ Form::checkbox('macrozonas[]', $macrozona->id) }}
		        <strong>{{ $macrozona->region->name }}</strong> > <strong>{{ $macrozona->name }}</strong> > <strong>{{ $macrozona->rubro->name }}</strong>
		        
	        </label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
