@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producto
                </div>
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $user->name }} </p>
                    <p><strong>E-mail</strong> {{ $user->email }} </p>
                    <p><strong>Cargo</strong> {{ $user->cargo }} </p>
                    <p><strong>Region</strong> {{ $user->region->name }} </p>
                    <hr>
                    <label><strong>Rol</strong></label>
                    <ul>
                        @foreach($roles as $rol)
                        <li>{{ $rol->name }}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <label><strong>Secciones del Boletín</strong></label>
                    <ul>
                        @foreach($seccions as $seccion)
                        <li>{{ $seccion->name }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection