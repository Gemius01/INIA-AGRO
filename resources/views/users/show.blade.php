@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario
                </div>
                <div class="card-body">
                    <p><strong>Nombre: </strong> {{ $user->name }} </p>
                    <p><strong>E-mail: </strong> {{ $user->email }} </p>
                    <p><strong>Cargo Académico: </strong> {{ $user->cargo }} </p>
                    <p><strong>Cri: </strong> {{ $user->cri }} </p>
                    <p><strong>Rol:</strong></p>
                    <ul>
                        @foreach($roles as $rol)
                        <li>{{ $rol->name }}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <label><strong>Región(es): </strong></label>
                    <ul>
                        @foreach($regiones as $region)
                        <li>{{ $region->name }}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <label><strong>Macrozona(s): </strong></label>
                    <ul>
                        @foreach($macrozonas as $macrozona)
                        <li>{{ $macrozona->region->name }} > {{$macrozona->name}}
                            @if($macrozona->rubro != null)
                            > {{$macrozona->rubro->name}}
                                @if($macrozona->rubro->subrubro != null)
                                > {{$macrozona->rubro->subrubro}}
                                @else
                                @endif
                            @else
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    <hr>
                    <label><strong>Sección(es): </strong></label>
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
