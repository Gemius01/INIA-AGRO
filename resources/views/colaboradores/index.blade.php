@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tus Colaboradores
                </div>
                <div class="card-body">
                  <p><strong>Tus Regiones: </strong>
                    @foreach($regiones as $region)
                    {{$region->name}} /
                    @endforeach
                  </p>
                   <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="">Nombre</th>
                               <th width="">Email</th>
                               <th width="10%">Opción</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($arrayUsers as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td style="text-align: center;">
                            <a href="{{ route('user.email', encrypt($user->id)) }}" id="example"
                                class="btn btn-sm btn-primary">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                       </tbody>
                   </table>
                   <center>
               </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
