<head>
<!--<link href="{!! asset('css/prueba.css') !!}" media="all" rel="stylesheet" type="text/css" />-->
<!--<link href="{{ public_path('css/prueba.css') }}" rel="stylesheet" type="text/css" />-->
</head>

@foreach($boletin->secciones as $seccion)



<h1>{{$seccion->name}} {{$seccion->id}}</h1>

{!! $seccion->pivot->contenido !!}


@endforeach
