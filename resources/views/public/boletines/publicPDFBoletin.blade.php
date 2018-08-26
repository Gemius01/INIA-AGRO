<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="{!! asset('css/pdfBoletin.css') !!}" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		@php $i=0
		@endphp
		@foreach($boletin->secciones as $seccion)
		@if($i==0)
		<htmlpageheader name="page-portada">
		</htmlpageheader>
		{!! $seccion->pivot->contenido !!}
		<htmlpagefooter name="page-footerPortada">
		</htmlpagefooter>
		<pagebreak>
			@else
			<htmlpageheader name="page-header">
				<div class="header">
					Boletín de Riesgos Agroclimáticos - {{$boletin->region->name}} - {{$boletin->publicacion->mes->nombre}}/{{$boletin->publicacion->año}}
				</div>
				<div class="border"></div>
			</htmlpageheader>
			@if($i==5)
			@if($booleanSeccionMacro)
			<div class="titulo">
				{{$seccion->name}}
			</div>
			<div class="contenido">
				{!! $seccion->pivot->contenido !!}
				<br>
				@foreach($arrayMacro as $macrozona)
				@if($macrozona->pivot->contenido != null)
				<div>
					<strong>
					{{ $macrozona->name }}
					@if($macrozona->rubro != null)
					> {{ $macrozona->rubro->name }}
					@if($macrozona->rubro->subrubro !=null)
					> {{ $macrozona->rubro->subrubro }}
					@else
					@endif
					@else
					@endif
					</strong>
				</div>
				<div>
					{!! $macrozona->pivot->contenido !!}
				</div>
				@else
				@endif
				@endforeach
			</div>
			@else
			@endif
			@else
			@if($seccion->pivot->contenido != null)
			<div class="titulo">
				{{$seccion->name}}
			</div>
			<div class="contenido">
				{!! $seccion->pivot->contenido !!}
			</div>
			@else
			@endif
			@endif
			<htmlpagefooter name="page-footer">
				<div class="border"></div>
				<div class="footer">
					Instituto de Investigaciones Agropecuarias (INIA) <br>
					<a href="http://www.inia.cl">www.inia.cl</a> - agromet.inia.cl
				</div>
				<div class="paginacion">
					{PAGENO}
				</div>
			</htmlpagefooter>
			@endif
			@php
			$i++
			@endphp
			@endforeach
		</body>
</html>