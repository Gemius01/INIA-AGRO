<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="{!! asset('css/pdfResumen.css') !!}" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		
		<htmlpageheader name="page-portada">
		</htmlpageheader>
		<div class="contenido">
		<center><img src="../../images/logo-inia.png" alt="" border="0" /></center>
		<p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: green; font-size: 24px;"><strong>{{ mb_strtoupper($seccionDetail->name) }}</strong></span></p>
		<p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: red; font-size: 24px;"><strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS
			PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA
		GANADERÍA</strong></span></p>
		<p align="center"><span style="color: red; font-size: 24px;text-transform: uppercase;"><strong>
			{{$boletin->publicacion->mes->nombre}} {{ $boletin->publicacion->año }}
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
						{{ substr($boletin->publicacion->mes->inicio, -2) }}
						al
						{{ substr($boletin->publicacion->mes->fin, -2) }}
						de
						{{ $boletin->publicacion->mes->nombre }}
						de
						{{ $boletin->publicacion->año}}
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
						DEPARTAMENTO DE GESTIÓN INTEGRAL DE RIEGOS (DGIR)
						</p>
					</td>
				</tr>
				
			</tbody>
		</table>
		</div>
		<htmlpagefooter name="page-footerPortada">
		</htmlpagefooter>
		<pagebreak>
            @if($seccionDetail->pivot->contenido != null)
			<htmlpageheader name="page-header">
				<div class="header">
					{{ $seccionDetail->name }} - {{$boletin->publicacion->mes->nombre }} {{$boletin->publicacion->año }}
					
				</div>
				<div class="border"></div>
			</htmlpageheader>
			
			<div class="titulo">
				{{ $seccionDetail->name }}
			</div>
			<div class="contenido">
				{!! $seccionDetail->pivot->contenido !!}
			</div>
			
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
                {{ $seccionDetail->name }} - {{$boletin->publicacion->mes->nombre }} {{$boletin->publicacion->año }}
					
				</div>
				<div class="border"></div>
			</htmlpageheader>
			
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
		</body>
		<script>
		</script>
	</html>