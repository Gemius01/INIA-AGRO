@extends('layouts.app')
@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Portada
                </div>
                <div class="card-body">
                   <center><img src="../../images/logo-inia.png" alt="" border="0" /></center>
        <p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: green; font-size: 24px;"><strong>RESUMEN EJECUTIVO NACIONAL</strong></span></p>
        <p style="padding-top: 40px; padding-bottom: 40px;" align="center"><span style="color: red; font-size: 24px;"><strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS
            PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA
        GANADERÍA</strong></span></p>
        <p align="center"><span style="color: red; font-size: 24px;text-transform: uppercase;"><strong>
            {{$resumen->publicacion->mes->nombre}} {{ $resumen->publicacion->año }}
        </strong></span></p>
        <p><br /><br /></p>
        <table width="100%">
            <tr>
                <th width="100px"></th>
                <th></th>
                <th></th>
            </tr>
            <tbody>
                <tr>
                    <td ><p style="color:green;">PERIODO</p></td>
                    <td>:</td>
                    <td style="text-align:left;">
                        <p style="color:green;">
                        {{ substr($resumen->publicacion->mes->inicio, -2) }}
                        al
                        {{ substr($resumen->publicacion->mes->fin, -2) }}
                        de
                        {{ $resumen->publicacion->mes->nombre }}
                        de
                        {{ $resumen->publicacion->año}}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="100px"><p style="color:green;">ELABORADO POR</p></td>
                    <td>:</td>
                    <td style="text-align:left;">
                        <p style="color:green;">Instituto de Investigaciones Agropecuarias (INIA)</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40px;"><p style="color:green;">DESTINATARIO</p></td>
                    <td>:</td>
                    <td style="text-align:left;">
                        <p style="color:green;">
                        Unidad Nacional de Emergencia Agrícola y Riesgo Agroclimático (UNEA),
                        Ministerio de Agricultura.
                        </p>
                    </td>
                </tr>
                
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($resumen->regiones as $region)

@if($region->id == 1)
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resumen Ejecutivo {{$region->name}}  
                </div>
                <div class="card-body">
                    {!! $region->pivot->contenido !!}
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$region->name}}
                    
                </div>
                <div class="card-body">
                    {!! $region->pivot->contenido !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection