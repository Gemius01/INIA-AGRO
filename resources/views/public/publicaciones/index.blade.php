@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Publicaciones
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th width="35%">Mes</th>
                <th width="35%">Año</th>
                <th colspan="3" width="30%" style="text-align: center;">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($publicaciones as $publicacion)
              <tr>
                <td>{{$publicacion->mes->nombre}}</td>
                <td>{{$publicacion->año}}</td>
                <td style="text-align: center;">
                  <a href="{{ route('publicPublicacion.show', encrypt($publicacion->id)) }}"
                  class="btn btn-sm btn-primary">Ver</a>
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