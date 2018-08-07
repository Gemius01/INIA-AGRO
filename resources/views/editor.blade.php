@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>
                    Boletín Agrometeorológico - Región: {{ $boletin->region->name}} -
                    {{ $boletin->publicacion->mes->nombre }} - {{ $boletin->publicacion->año }}
                    </strong>
                     <a href="{{ route('boletines.show', encrypt($boletin->id))}}"
                    class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver Atrás</a>
                </div>

                <div class="card-body">

                    Seccion: {{ $seccionDetail->name }}
                    <hr>
                    <div>
                    <form id="get-data-form" method="post">

                       <textarea name="content" id="tinymce" class="form-control my-editor" >
                        <?= htmlspecialchars($seccionDetail->pivot->contenido); ?>
                        </textarea>

                    </form>
                    <div style="display:none;">
                        <input id="obj" value="{{ $seccionDetail }}"></input>
                    </div>
                    <div>
                    </div>
                    <br>
                    <center>
                        <button  class="btn btn-sm btn-primary"  onclick="guardarDatos()">Guardar Datos</button>

                    </center>
                    <div>
                      <hr>
                      <h4>IMAGENES</h4>
                      @if(Auth::user()->roles()->first()->id == 1)
                      <p><strong>Directorio:</strong> {{ $dirname }}</p>
                      @else
                      @endif
                      <hr>
                      @if($arrayImages != null)
                      <div width="100%" style="overflow-y:scroll; overflow-x:hidden; height:500px;">
                      @foreach($arrayImages as $image)
                         <div class="responsive">
                          <div class="gallery" >
                            <a  href="#">
                              {!! $image !!}
                            </a>
                          <div class="desc"></div>
                          </div>
                         </div>
                      @endforeach
                      </div>
                      @else
                      <h4>No hay imagenes para mostrar</h4>
                      @endif


                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="modalGraficos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title"><strong>Gráficos de Información</strong></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="container">
    <label><strong>Seleccione EMA</strong></label>
    <select class="custom-select">
      <option selected>Seleccione Estación Meteorológica Automática</option>
      <option value="1">Meteo1</option>
      <option value="2">Meteo2</option>
      <option value="3">Meteo3</option>
    </select>
    <hr>
    <label><strong>Gráfico</strong></label>
    <select class="custom-select">
      <option selected>Seleccione el gráfico a crear</option>
      <option value="1">Gráfico 1</option>
      <option value="2">Gráfico 2</option>
      <option value="3">Gráfico 3</option>
    </select>
    <hr>
    <center>
    <button  class="btn btn-sm btn-primary"  onclick="generarGrafico()">Generar Gráfico</button>
    </center>
    <hr>
      <div id="container" style="width: 100%;height: 400px;margin: 0 auto;"></div>
    </div>
    </div>
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript" src="{{ asset('data.json')}}"></script>

<div id="container" style="min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto;"></div>
<script>
var json = [{"name":"Date","data":["\n5/6/2015 00:00:00","\n17/6/2015 00:00:0","\n15/6/2015 00:00:0","\n11/6/2015 00:00:0","\n11/6/2015 00:00:0"]},{"name":"Traf_BH_TCH_Erl","data":[11.23,3.36,4.08,11.96,9.97]}];

$(function () {
    var mydata = JSON.parse(data);
    console.log(mydata);
    var options = {
        chart: {
            renderTo: 'container',
            type: 'line'
        },
        title: {
            text: 'Horas Frio',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [],
            title: {
                text: 'Date'
            }
        },
        yAxis: {
            title: {
                text: 'Traf_BH_TCH_Erl'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'Hz'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series:
        [{
            data:             []
        }]
    };
        options.xAxis.categories = [1,2,3,4,5,6,7,8,9];
        options.series = [{name:'Hora frio', data: [4.3,4.2,4.8,4.5]}, {data: [1.3,1.2,1.8]}];//Acá seteo las opciones para crear las series del gráfico

        chart = new Highcharts.Chart(options);


});
</script>
<script>
var unsaved = false;
var editor_config = {
path_absolute : "/",
selector: "textarea.my-editor",
language_url : '/languages/es.js',
plugins: [
"advlist autolink lists link image charmap print preview hr",
"searchreplace wordcount code fullscreen",
"insertdatetime nonbreaking save table contextmenu directionality",
"emoticons paste textcolor colorpicker textpattern "
],
menu: {
        file: {title: 'File', items: 'newdocument | print'},
        edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace'},
        view: {title: 'View', items: 'fullscreen | preview'},
        insert: {title: 'Insert', items: ' template hr | charmap | insertdatetime'},
        format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | removeformat'},
        tools: {title: 'Tools', items: 'spellchecker code'},
        table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'}
      },
paste_enable_default_filters: false,
paste_data_images: false,
branding: false,
image_description: false,
toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | mybutton",
relative_urls: false,
remove_script_host: false,
height: 200,
setup: function(editor){
    editor.on('keydown', function(event) {
        if (event.keyCode == 9) { // tab pressed
          if (event.shiftKey) {
            editor.execCommand('Outdent');
          }
          else {
            editor.execCommand('Indent');
          }
          event.preventDefault();
          return false;
        }
    });
     editor.on('change', function(event){
      unsaved = true;
    });
editor.addButton('mybutton', {
//icon: 'sun',
image: "{{ URL::to('/') }}/images//grafico.png",
tooltip: "Gráficos de información",
onclick: function () {
$('#modalGraficos').modal('show');
}
});
},
file_browser_callback : function(field_name, url, type, win) {
var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
if (type == 'image') {
cmsURL = cmsURL + "&type=Images";
} else {
cmsURL = cmsURL + "&type=Files";
}
tinyMCE.activeEditor.windowManager.open({
file : cmsURL,
title : 'Filemanager',
width : x * 0.8,
height : y * 0.8,
resizable : "yes",
close_previous : "no"

});
}
};

tinymce.init(editor_config);
</script>
<script>
function unloadPage(){
    if(unsaved){
        return confirm('Tienes Cambios sin guardar ¿Deseas salir?');
    }
}
window.onbeforeunload = unloadPage;
</script>

<script>
function pruebaConsole()
{
  var selectContent = tinymce.get('tinymce').getContent();
    console.log(selectContent);
}

function guardarDatos()
{
    unsaved = false;
    var objSeccion = JSON.parse(document.getElementById('obj').value);
    console.log(objSeccion)
    var boletin_id = objSeccion.pivot.boletin_id;
    var seccion_id = objSeccion.pivot.seccion_id;
    console.log(boletin_id);
    var contentTinymce = tinymce.get('tinymce').getContent();
    $.ajax({
    method: 'POST', // Type of response and matches what we said in the route
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/editor/update', // This is the url we gave in the route
    data: {boletin_id: boletin_id, seccion_id: seccion_id, contenido: contentTinymce}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        //console.log(response);
        window.location.href = response;
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        //console.log(JSON.stringify(jqXHR));
        //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});

}
function generarGrafico()
{
    $.ajax({
    method: 'GET', // Type of response and matches what we said in the route

    url: 'https://jsonplaceholder.typicode.com/todos/1', // This is the url we gave in the route
     // a JSON object to send back
    success: function(response){ // What to do if we succeed
        //console.log(response);
        var json = {
                    "region": {
                        "id": 1,
                        "ema": {
                            "nombre": "meteo1",
                            "grafico1": {
                                "xAxis": {
                                   "categories": ["cat1", "cat2", "cat3"],
                                   "title": {
                                      "text": "titulo del eje X"
                                            }
                                         },
                                "yAxis": {
                                    "title": {
                                         "text": "Titulo del eje Y"
                                        }
                                },
                                "series": [
                                    {"name": "serie1", "data":[4,5,6,7,8]},
                                    {"name": "serie2", "data":[9,5,3,7,5]},
                                    {"name": "serie3", "data":[10,5,4,7,5]},
                                    {"name": "serie4", "data":[9,5,5,6,5]},
                                    {"name": "serie5", "data":[10,5,3,7,20]}
                                    ]

                                }
                               }
                            }
                    };
        var options = {
        chart: {
            renderTo: 'container',
            type: 'line'
        },
        title: {
            text: 'Horas Frio',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [],
            title: {
                text: 'Eje X'
            }
        },
        yAxis: {
            title: {
                text: 'Eje Y'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'Hz'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series:
        [{
            data:             []
        }]
    };
    console.log(json.region.ema.grafico1.series[0]);
    options.series = [{"name":"serie1", 'data': [1,4,3,2]}];
    options.series = [json.region.ema.grafico1.series[0],
                      json.region.ema.grafico1.series[1],
                      json.region.ema.grafico1.series[2],
                      json.region.ema.grafico1.series[3],
                      json.region.ema.grafico1.series[4] ];
    chart = new Highcharts.Chart(options);

    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        //console.log(JSON.stringify(jqXHR));
        //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
    });
}

</script>
@endsection
