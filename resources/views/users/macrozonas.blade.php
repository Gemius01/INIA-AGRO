@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Agregar Macrozonas
                </div>
                <div class="card-body">

                    {!! Form::model($user, ['route' => ['users.guardarmacrozonas', $user->id],
                    'method' => 'PUT']) !!}

                        @include('users.partials.formMacrozona')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection