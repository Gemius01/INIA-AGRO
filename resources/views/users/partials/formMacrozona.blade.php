<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
		<tr>
			<th width="20%">Nombre</th>
			<th width="20%">E-mail</th>
			<th width="15%">Región(es)</th>
			<th width="45%">Macrozona(s)</th>
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
				@if($macrozona->rubro != null)
		         > {{ $macrozona->rubro->name }} 
		         @if($macrozona->rubro->subrubro !=null)
		         > {{ $macrozona->rubro->subrubro }} 
		         @else
		         
		         @endif
		        @else
		         
		        @endif
				</li>
			@endforeach
			</ul>
		</td>
	</tbody>
</table>
<hr>
<h3>Macrozonas</h3>
<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
	<tr>
		<th style="text-align: center;">Check</th>
		<th>Región</th>
		<th>Macrozona</th>
		<th>Rubro</th>
		<th>Subrubro</th>
	</tr>
	</thead>
	<tbody>
		 @foreach($macrozonas as $macrozona)
		 <tr>
			<td style="text-align: center;">{{ Form::checkbox('macrozonas[]', $macrozona->id) }}</td>
			<td>{{ $macrozona->region->name }}</td>
			<td>{{ $macrozona->name }}</td>
			
				@if($macrozona->rubro != null)
		         <td>{{ $macrozona->rubro->name }}</td>
		         @if($macrozona->rubro->subrubro !=null)
		         <td>{{ $macrozona->rubro->subrubro }}</td>
		         @else
		         <td style="text-align: center;">-</td>
		         @endif
		        @else
		         <td style="text-align: center;">-</td>
		         <td style="text-align: center;">-</td>
		        @endif

			</tr>
		@endforeach
	</tbody>
</table>
<div class="form-group">
	<center>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</center>
</div>
