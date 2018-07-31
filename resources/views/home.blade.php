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
          @can('resumen.show')
          <strong>RESUMEN EJECUTIVO</strong>
          <hr>
         
          <table class="table table-striped table-hover table-bordered" width="100%">
            <thead>
              <tr>
                <!--<th width="10px">ID</th>-->
                <th>Mes</th>
                <th>Año</th>
                <th colspan="1"><center>Opciones</center></th>
              </tr>
            </thead>
            <tbody>
              <tr>

                
                
                @if($resumen != null)
                <td>{{ $resumen->publicacion->mes->nombre ?: '-'}}</td>
                <td>{{ $resumen->publicacion->año ?: '-'}}</td>
                @can('resumen.show')
                <td style="text-align: center;">
                    <a href="{{ route('resumenes.show', $resumen->id) }}"
                    class="btn btn-sm btn-primary">Ver</a>
                </td>
                @endcan
                @else
                
                @endif
                
              </tr>
            </tbody>
          </table>
          @endcan
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
              @if($userBoletines !=null)
              @foreach($userBoletines as $boletin)
              <tr>
                
                <td>{{ $boletin->region->name }} </td>
                @if($boletin->estado == 1)
                  <td style="background-color: #e6ffe6; text-align: center;">
                    Abierto
                  </td> 
                @else
                  <td style="background-color: #ffcccc; text-align: center;">
                    Cerrado
                  </td>
                @endif
               
                <td width="10px">
                  <a href="{{ route('boletines.show', $boletin->id) }}"
                  class="btn btn-sm btn-primary">Ver</a>
                </td>
              </tr>
              @endforeach
              @else
              @endif
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection