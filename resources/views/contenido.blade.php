@extends('layouts.app')

@section('content')


<head>

<link href="{!! asset('css/prueba.css') !!}" media="all" rel="stylesheet" type="text/css" />
<!--<link href="{{ public_path('css/prueba.css') }}" rel="stylesheet" type="text/css" />-->
</head>
<body>
  @foreach($boletines->secciones as $seccion)
  <h1>{{$seccion->name}}</h1>

  @endforeach


</body>

@endsection
