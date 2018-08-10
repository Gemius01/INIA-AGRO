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
                        <input id="idRegion" value="{{ $boletin->region->numero}}"/>
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
<!-- Modal de Gràficos -->
<div class="modal fade bd-example-modal-lg" id="modalGraficos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title"><strong>Gráficos de Información</strong></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="container" id="bodyModal">
    <label><strong>Seleccione EMA</strong></label>
    <select class="custom-select" id="selectEmas">
      <!--<option selected>Seleccione Estación Meteorológica Automática</option>-->
    </select>
    <hr>
    <label><strong>Gráfico</strong></label>
    <select class="custom-select" id="selectGrafico">
      <!--<option selected>Seleccione el gráfico a crear</option>-->
    </select>
    <hr>
 
    <hr>
      <div id="container" style="width: 100%;height: 400px;margin: 0 auto;"></div>
      <div id="textoEma">
        
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Fin de modal gráficos-->


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
  $( document ).ready(function() {
    var idRegion = document.getElementById("idRegion").value;
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
                text: 'áñ'
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
            data: []
        }]
    };
    
   $.ajax({
      method: 'GET', 
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/json/graficos/'+ idRegion +'', 
      success: function(response){ 

          if(!!response) {
          var json = response;
          var emas = json.region.emas;

          $.each(emas, function (i, item) {
              $('#selectEmas').append($('<option>', { 
                  value: i,
                  text : item.nombre 
              }));
          });
          $.each(emas[0].graficos, function (i, item) {
              $('#selectGrafico').append($('<option>', { 
                      value: i,
                      text : item.yAxis.title.text 
                  }));
          });
              options.title.text = emas[0].graficos[0].yAxis.title.text // Setea el título del gráfico
              options.yAxis.title.text = emas[0].graficos[0].yAxis.title.text //Seteo de nombre Eje Y
              options.xAxis.title.text = emas[0].graficos[0].xAxis.title.text //Seteo de nombre Eje X
              options.xAxis.categories = emas[0].graficos[0].xAxis.categories //Setea las categorías del eje X
              options.series = emas[0].graficos[0].series //Setea las series (lineas del gráfico)
              chart = new Highcharts.Chart(options); //Creación del Gráfico
              $( "#textoEma" ).empty();
              $( "#textoEma" ).append( emas[0].texto );
          $("#selectEmas" ).change(function() { //Función change de select Emas
              var value = document.getElementById("selectEmas").value;
              var graficos = emas[value].graficos;
              $( "#selectGrafico" ).empty();
              $.each(graficos, function (i, item) {
              $('#selectGrafico').append($('<option>', { 
                      value: i,
                      text : item.yAxis.title.text 
                  }));
              });
              $( "#textoEma" ).empty();
              $( "#textoEma" ).append( emas[value].texto );

              options.title.text = emas[value].graficos[0].yAxis.title.text
              options.yAxis.title.text = emas[value].graficos[0].yAxis.title.text //Seteo de nombre Eje Y
              options.xAxis.title.text = emas[value].graficos[0].xAxis.title.text //Seteo de nombre Eje X
              options.xAxis.categories = emas[value].graficos[0].xAxis.categories //Setea las categorías del eje X
              options.series = emas[value].graficos[0].series //Setea las series (lineas del gráfico)
              chart = new Highcharts.Chart(options); //Creación del Gráfico
          });
          $("#selectGrafico").change(function() {
                
              var valueGrafico = document.getElementById("selectGrafico").value; //value index del select Gráfico
              var value = document.getElementById("selectEmas").value; //value index del select Emas
              var datosGrafico = emas[value].graficos[valueGrafico];

              options.title.text = datosGrafico.yAxis.title.text
              options.yAxis.title.text = datosGrafico.yAxis.title.text //Seteo de nombre Eje Y
              options.xAxis.title.text = datosGrafico.xAxis.title.text //Seteo de nombre Eje X
              options.xAxis.categories = datosGrafico.xAxis.categories //Setea las categorías del eje X
              options.series = datosGrafico.series //Setea las series (lineas del gráfico)
              chart = new Highcharts.Chart(options); //Creación del Gráfico
              
          });

      }else
      {
        $("#bodyModal").empty(); //Limpiar el Modal

        $('#bodyModal').append('<br><center><h4>ESTA REGIÓN NO CUENTA CON GRÁFICOS</h4></center>'); //Msj cuando no hayan gráficos
      }    


      },
      error: function(jqXHR, textStatus, errorThrown) { 
          //console.log(JSON.stringify(jqXHR));
          //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      }
    });
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
paste_enable_default_filters: false,
menu: {
        file: {title: 'File', items: 'newdocument | print'},
        edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace'},
        view: {title: 'View', items: 'fullscreen | preview'},
        insert: {title: 'Insert', items: ' template hr | charmap | insertdatetime'},
        format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | removeformat'},
        tools: {title: 'Tools', items: 'spellchecker code'},
        table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'}
      },
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
</script>
@endsection
