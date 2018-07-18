@extends('layouts.app')
@section('content')
<div >
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <strong>RESUMEN EJECUTIVO</strong>
          <hr>
          <table class="table table-striped table-hover table-bordered" width="100%">
            <thead>
              <tr>
                <!--<th width="10px">ID</th>-->
                <th>Mes</th>
                <th>Año</th>
                <th colspan="2"><center>Opciones</center></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Julio</td>
                <td>2018</td>
                
                @can('users.show')
                <td width="10px">
                  <a href=""
                  class="btn btn-sm btn-primary disabled">Ver</a>
                </td>
                @endcan
                @can('users.edit')
                <td width="10px">
                  <a href=""
                  class="btn btn-sm btn-success disabled">Editar</a>
                </td>
                @endcan
              </tr>
            </tbody>
          </table>
          <strong>BOLETINES</strong>
          <hr>
          <table class="table table-striped table-hover table-bordered" width="100%">
            <thead>
              <tr>
                <!--<th width="10px">ID</th>-->
                <th>Región</th>
                <th>Estado</th>
                <th colspan="1"><center>Opciones</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach($userBoletines as $boletin)
              <tr>
                
                <td>{{ $boletin->region->name }} </td>
                <td>@if($boletin->estado == 1)
                  Abierto
                  @else
                  Cerrado
                  @endif
                </td>
                <td width="10px">
                  <a href="{{ route('boletines.show', $boletin->id) }}"
                  class="btn btn-sm btn-primary">Ver</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection