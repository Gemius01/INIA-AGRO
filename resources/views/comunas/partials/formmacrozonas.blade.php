<table class="table table-striped table-hover table-bordered" width="100%">
	<thead>
		<tr>
			<th width="20%">Región</th>
			<th width="20%">Comuna</th>
			<th width="20%">Código</th>
			<th width="40%">Macrozona(s)</th>
		</tr>
	</thead>
	<tbody>
		<td>{{ $comuna->region->name }} [ {{$comuna->region->numero }} ]</td>
		<td>{{ $comuna->nombre }}</td>
		<td>{{ $comuna->codigo }}</td>
		<td>
		<ul>
			@foreach($macrozonasComuna as $macrozona)
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
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Guardar</button>
	</center>
</div>