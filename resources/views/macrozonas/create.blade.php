@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Macrozona
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'macrozonas.store']) }}

                        @include('macrozonas.partials.formCreate')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection