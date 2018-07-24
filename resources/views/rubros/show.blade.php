@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rubro
                </div>
                <div class="card-body">
                    <p><strong>ID</strong> {{ $rubro->id }} </p>
                    <p><strong>Nombre</strong> {{ $rubro->name }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection