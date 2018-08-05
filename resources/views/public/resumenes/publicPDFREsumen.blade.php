<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="{!! asset('css/pdfResumen.css') !!}" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		@php $i=0
		@endphp
		
		
		<htmlpageheader name="page-portada">
		</htmlpageheader>
		<center><img src="../../photos/shares/logo-inia.png" alt="" border="0" /></center>
		<p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: green; font-size: 24px;"><strong>RESUMEN EJECUTIVO NACIONAL</strong></span></p>
		<p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: red; font-size: 24px;"><strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS
			PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA
		GANADERÍA</strong></span></p>
		<p align="center"><span style="color: red; font-size: 24px;text-transform: uppercase;"><strong>
			{{$resumen->publicacion->mes->nombre}} {{ $resumen->publicacion->año }}
		</strong></span></p>
		<p><br /><br /></p>
		<table width="100%">
			<tr>
				<th width="100px"></th>
				<th></th>
				<th></th>
			</tr>
			<tbody>
				<tr>
					<td ><p style="color:green;">PERIODO</p></td>
					<td>:</td>
					<td style="text-align:left;">
						<p style="color:green;">
							{{ substr($resumen->publicacion->mes->inicio, -2) }}
							al
							{{ substr($resumen->publicacion->mes->fin, -2) }}
							de
							{{ $resumen->publicacion->mes->nombre }}
							de
							{{ $resumen->publicacion->año}}
						</p>
					</td>
				</tr>
				<tr>
					<td width="100px"><p style="color:green;">ELABORADO POR</p></td>
					<td>:</td>
					<td style="text-align:left;">
						<p style="color:green;">Instituto de Investigaciones Agropecuarias (INIA)</p>
					</td>
				</tr>
				<tr>
					<td style="width: 40px;"><p style="color:green;">DESTINATARIO</p></td>
					<td>:</td>
					<td style="text-align:left;">
						<p style="color:green;">
							Unidad Nacional de Emergencia Agrícola y Riesgo Agroclimático (UNEA),
							Ministerio de Agricultura.
						</p>
					</td>
				</tr>
				
			</tbody>
		</table>
		<htmlpagefooter name="page-footerPortada">
		</htmlpagefooter>
		<pagebreak>
			@foreach($resumen->regiones as $region)
			@if($i==0)
			<htmlpageheader name="page-header">
				<div class="header">
					Boletín de Riesgos Agroclimáticos - Resumen ejecutivo nacional - {{$resumen->publicacion->mes->nombre }} {{$resumen->publicacion->año }}
					
				</div>
				<div class="border"></div>
			</htmlpageheader>
			@if($region->pivot->contenido != null)
			<div class="titulo">
				Resumen ejecutivo nacional
			</div>
			<div class="contenido">
				{!! $region->pivot->contenido !!}
			</div>
			@else
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
			@else
			<htmlpageheader name="page-header">
				<div class="header">
					Boletín de Riesgos Agroclimáticos - Resumen ejecutivo nacional - {{$resumen->publicacion->mes->nombre }} {{$resumen->publicacion->año }}
					
				</div>
				<div class="border"></div>
			</htmlpageheader>
			@if($region->pivot->contenido != null)
			<div class="titulo">
				{{$region->name}}
			</div>
			<div class="contenido">
				{!! $region->pivot->contenido !!}
			</div>
			@else
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
		<script>
		</script>
	</html>