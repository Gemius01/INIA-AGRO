@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Publicacion
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'boletines.store']) }}

                        @include('boletines.partials.formCreate')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
