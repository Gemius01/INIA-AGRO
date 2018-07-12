<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{!! asset('css/prueba.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
	<p>hola</p>
	<p>hola</p>
	<p>hola</p>
	<div>
		<p>hola</p>
	</div>
	<htmlpageheader name="page-header">
	Your Header Content
</htmlpageheader>

<htmlpagefooter name="page-footer">
	Your Footer Content
</htmlpagefooter>
@foreach($boletin->secciones as $seccion)
<h1>{{$seccion->name}} {{$seccion->id}}</h1>

{!! $seccion->pivot->contenido !!}


@endforeach
</body>
<script>
	
</script>
</html>


