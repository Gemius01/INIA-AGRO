@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Envío de E-Mail
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => ['user.emailsend', encrypt($user->id)]]) }}
                        @include('colaboradores.partials.formSendEmail')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
