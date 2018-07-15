@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Macrozona
                </div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $macrozona->name }} </p>
                    <p><strong>Región</strong> {{ $macrozona->region['name'] }} </p>
                    <p><strong>Rubro</strong> {{ $macrozona->rubro['name'] }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection