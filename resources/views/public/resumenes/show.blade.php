@extends('layouts.app')
@section('content')
@foreach($resumen->regiones as $region)
@if($region->id == 1)
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resumen Ejecutivo {{$region->name}}  
                </div>
                <div class="card-body">
                    {!! $region->pivot->contenido !!}
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$region->name}}
                    
                </div>
                <div class="card-body">
                    {!! $region->pivot->contenido !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection