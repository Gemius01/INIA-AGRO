@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Comuna
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'comunas.store']) }}
                        @include('comunas.partials.formcreate')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection