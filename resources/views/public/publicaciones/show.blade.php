@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Publicación del mes de {{ $resumen->publicacion->mes->nombre }} del {{ $resumen->publicacion->año }}
          @can('products.create')
          <a href="{{ route('publicPublicaciones')}}"
          class="btn btn-sm btn-primary pull-right">Volver Atrás</a>
          @endcan
        </div>
        <div class="card-body">
          <h5>Resumen ejecutivo nacional</h5>
          <hr>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>Mes</th>
                <th>Año</th>
                <th colspan="2" style="text-align: center;" width="30%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $resumen->publicacion->mes->nombre }}</td>
                <td>{{ $resumen->publicacion->año }}</td>
                <td style="text-align: center;">
                  <a href="{{ route('PublicResumen.show', encrypt($resumen->id)) }}"
                  class="btn btn-sm btn-primary">Ver</a>
                </td>
                <td style="text-align: center;">
                  <a href="{{ route('PublicResumenPDF', $resumen->id) }}"
                  class="btn btn-sm btn-warning">Descargar PDF</a>
                </td>
              </tr>
            </tbody>
          </table>
          <h5>Boletín(es)</h5>
          <hr>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>Región</th>
                <th colspan="2" style="text-align: center;" width="30%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($boletines as $boletin)
              <tr>
                <td>{{ $boletin->region->name }}</td>
                <td style="text-align: center;">
                  <a href="{{ route('Publicboletines.show', encrypt($boletin->id)) }}"
                  class="btn btn-sm btn-primary">Ver</a>
                </td>
                <td style="text-align: center;">
                  <a href="{{ route('PublicBoletinPDF', $boletin->id) }}"
                  class="btn btn-sm btn-warning">Descargar PDF</a>
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