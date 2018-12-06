@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div >

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">
                    <label>Boletin Agrometeorlógico -  Región:
                    {{ $boletin->region->name }} -
                    {{ $boletin->publicacion->mes->nombre }}
                    {{ $boletin->publicacion->año }}
                    
                    </label>
                    <a href="{{ route('boletines.show', encrypt($boletin->id))}}"
                       
                    class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver Atrás</a>
                </div>

                <div class="card-body">
                    <strong>
                    Macrozona : {{ $detalleMacrozona->name}}
                    @if($detalleMacrozona->rubro != null)
                     > {{ $detalleMacrozona->rubro->name}} >
                     @if($detalleMacrozona->rubro->subrubro != null)
                     {{ $detalleMacrozona->rubro->subrubro}}
                     @else
                     @endif
                    @else
                    @endif
                    </strong>
                    <hr>
                    <div>
                    <form id="get-data-form" method="post">

                       <textarea name="content" id="tinymce" class="form-control my-editor" >
                       <?= htmlspecialchars($detalleMacrozona->pivot->contenido); ?>
                        </textarea>

                    </form>
                    <div style="display:none;">
                        <input id="obj" value="{{ $detalleMacrozona }}"></input>
                        <input id="boletin" value="{{ $boletin }}"></input>
                        <input id="idRegion" value="{{ $boletin->region->numero }}"></input>
                        <input id="idSubSeccion" value="{{ $detalleMacrozona->pivot->subseccion_id }}"></input>
                        <input id="idMacrozona" value="{{ $detalleMacrozona->pivot->macrozona_id }}"></input>
                        <input id="idBoletin" value="{{ $boletin->id }}"></input>
                        <input id="dirnameFolder" value="{{ $dirnameFolder }}"/>
                    </div>
                    <div>
                    </div>
                    <br>
                    <center>
                        <button  class="btn btn-sm btn-primary"  onclick="guardarDatos()">Guardar Datos</button>
                    </center>
                    <hr>
                    <div class="form-group">
                      <label for="resumen"><strong>Resumen</strong> (Máximo 900 caracteres)</label>
                      <textarea maxlength="900" class="form-control" rows="7" id="resumen">{{ $detalleMacrozona->pivot->resumen }}</textarea>
                    </div>
                    <center>
                        <button  class="btn btn-sm btn-primary"  onclick="guardarResumen()">Guardar Resumen</button>
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
                      @foreach($arrayImages as $key=>$image)
                         <div class="responsive">
                          <div class="gallery" >
                            <a  href="#">
                              {!! $image !!}
                            </a>
                          <div class="desc">{{ $arrayNameImages[$key] }}</div>
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
<!-- Inicio Modal Gráficos -->
<div class="modal fade bd-example-modal-lg" id="modalGraficos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title"><strong>Gráficos de Información</strong></h6>
        @if($user == 1)
        <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modalVisitas"><i class="fa fa-eye" aria-hidden="true"></i>
        @else
        @endif
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
<!-- Fin Modal Gráficos -->
<!-- Inicio Modal DMC -->
<div class="modal fade bd-example-modal-lg" id="modalDMC" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title"><strong>Dirección Meteorológica Chile</strong></h6>
        @if($user == 1)
        <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modalVisitasDMC"><i class="fa fa-eye" aria-hidden="true"></i>
        @else
        @endif
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="container" id="bodyModal">
    <label><strong>Seleccione EMA</strong></label>
    <select class="custom-select" id="selectEmasDMC">
      <!--<option selected>Seleccione Estación Meteorológica Automática</option>-->
    </select>
    <hr>
      
      <div id="textoDMC">
        
      </div>
    <br>
    </div>
    </div>
  </div>
</div>
<!-- Fin Modal DMC -->
<!-- Modal Visitas-->
<div class="modal fade" id="modalVisitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visitas a los Gráficos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12" id="bodyModalVisitas">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Visitas -->
<!-- Modal Visitas DMC-->
<div class="modal fade" id="modalVisitasDMC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visitas a los Gráficos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12" id="bodyModalVisitasDMC">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Visitas DMC-->
<link href="{!! asset('css/dmc.css') !!}" media="all" rel="stylesheet" type="text/css" />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
  $( document ).ready(function() {

    var idRegion = document.getElementById("idRegion").value;
    $.ajax({
      method: 'GET', 
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/json/graficos/'+ idRegion +'', 
      success: function(response){ 
          console.log(response)
          if(!!response) {
          var json = response;
          var emas = response.region.emas;

          $.each(emas, function (i, item) {
              $('#selectEmas').append($('<option>', { 
                  value: i,
                  text : item.nombre 
              }));
          });
         
          $.each(emas[0].graficos, function (i, item) {
              $('#selectGrafico').append($('<option>', { 
                      value: i,
                      text : item.title.text 
                  }));
          });

              Highcharts.chart('container', emas[0].graficos[0]);//Creación del Gráfico

              $( "#textoEma" ).empty();
              $( "#textoEma" ).append( emas[0].texto );
          $("#selectEmas" ).change(function() { //Función change de select Emas
              var value = document.getElementById("selectEmas").value;
              var graficos = emas[value].graficos;
              $( "#selectGrafico" ).empty();
              $.each(graficos, function (i, item) {
              $('#selectGrafico').append($('<option>', { 
                      value: i,
                      text : item.title.text 
                  }));
              });
              $( "#textoEma" ).empty();
              $( "#textoEma" ).append( emas[value].texto );

              Highcharts.chart('container', emas[value].graficos[0]); //Creación del Gráfico

          });
          $("#selectGrafico").change(function() {
              
              var valueGrafico = document.getElementById("selectGrafico").value; //value index del select Gráfico
              var value = document.getElementById("selectEmas").value; //value index del select Emas
              var datosGrafico = emas[value].graficos[valueGrafico];

              Highcharts.chart('container', datosGrafico);//Creación del Gráfico
          });

      }else
      {
        $("#bodyModal").empty(); //Limpiar el Modal

        $('#bodyModal').append('<br><center><h4>ESTA REGIÓN NO CUENTA CON GRÁFICOS</h4></center>'); //Msj cuando no hayan gráficos
      }    


      },
      error: function(jqXHR, textStatus, errorThrown) { 

      }
    });

/////////////////////////////////////////// CONSULTA DMC /////////////////////////////////////
    $.ajax({
      method: 'GET', 
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/json/dmc/'+ idRegion +'', 
      success: function(response){ 
          //console.log(response)
          if(!!response) {
          var json = response;
          var emas = json.region.emas;
          
          $( "#textoDMC" ).append( emas[0].texto );
          $.each(emas, function (i, item) {
              $('#selectEmasDMC').append($('<option>', { 
                  value: i,
                  text : item.nombre 
              }));
          });
         
          
          $("#selectEmasDMC" ).change(function() { //Función change de select Emas
            
              var value = document.getElementById("selectEmasDMC").value;
              $( "#textoDMC" ).empty();
              $( "#textoDMC" ).append( emas[value].texto );
              

          });


      }else
      {
        $("#bodyModal").empty(); //Limpiar el Modal

        $('#bodyModal').append('<br><center><h4>ESTA REGIÓN NO CUENTA CON INFORMACIÓN</h4></center>'); //Msj cuando no hayan gráficos
      }    


      },
      error: function(jqXHR, textStatus, errorThrown) { 

      }
    });
   
});
</script>
<script>
//Configuración Tinymce
var unsaved = false;
var unsavedResumen = false;
var editor_config = {
path_absolute : "/",
selector: "textarea.my-editor",
language_url : '/languages/es.js',
plugins: [
"advlist autolink lists link image charmap print preview hr",
"searchreplace wordcount visualblocks visualchars code fullscreen",
"insertdatetime nonbreaking save table contextmenu directionality",
"emoticons paste textcolor colorpicker textpattern "
],
allow_script_urls: false,
paste_as_text: true,
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
toolbar: "insertfile undo redo | styleselect | bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | mybutton | pronostico",
relative_urls: false,
remove_script_host: false,
height: 350,
paste_preprocess : function(pl, o) {
    o.content =  o.content.replace('style="width: 0px;"', '')
},
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
icon: 'sun',
text: 'Gráficos',
//image: "{{ URL::to('/') }}/images//grafico.png",
tooltip: "Gráficos de información",
onclick: function () {
$('#modalGraficos').modal('show');
contadorVisita()
}
});
editor.addButton('pronostico', {
icon: 'sun',
text: 'Pronóstico',
//image: "{{ URL::to('/') }}/images//grafico.png",
tooltip: "Pronóstico",
onclick: function () {
$('#modalDMC').modal('show');
contadorVisitaDMC()

}
});
},
file_browser_callback : function(field_name, url, type, win) {
var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
var dirnameFolder = document.getElementById('dirnameFolder').value
var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
if (type == 'image') {
cmsURL = cmsURL + "&type=Images&folder=" +dirnameFolder+"";
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
$( document ).ready(function() {

    $("#resumen").on('change keyup paste', function() {
      unsavedResumen = true;
    // your code here
});
});

function unloadPage(){
  quitarAlerta();
    if(unsaved){
        return confirm('Tienes Cambios sin guardar en la macrozona ¿Deseas salir?');
    }else if (unsavedResumen)
    {
      return confirm('Tienes Cambios sin guardar en resumen ¿Deseas salir?');
    }
}
window.onbeforeunload = unloadPage;
</script>

<script>
function pruebaConsole()
{
  var selectContent = tinymce.get('tinymce').getContent();

}

function guardarDatos()
{

    unsaved = false;
    var objSeccion = JSON.parse(document.getElementById('obj').value);
    var boletinObj = JSON.parse(document.getElementById('boletin').value);

    var subseccion_id = objSeccion.pivot.subseccion_id;
    var macrozona_id = objSeccion.pivot.macrozona_id;
    var boletin_id = boletinObj.id;

    var contentTinymce = tinymce.get('tinymce').getContent();
    $.ajax({
    method: 'POST', // Type of response and matches what we said in the route
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/editorMacrozona/update', // This is the url we gave in the route
    data: {subseccion_id: subseccion_id, macrozona_id: macrozona_id, contenido: contentTinymce, boletin_id: boletin_id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        alert('Se ha editado correctamente');
        //window.location.href = response;
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        //console.log(JSON.stringify(jqXHR));
        //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});

}

 function guardarResumen()
 {
    unsavedResumen = false;
    
    var objSeccion = JSON.parse(document.getElementById('obj').value);
    var boletinObj = JSON.parse(document.getElementById('boletin').value);

    var subseccion_id = objSeccion.pivot.subseccion_id;
    var macrozona_id = objSeccion.pivot.macrozona_id;
    var boletin_id = boletinObj.id;

    var contentResumen = document.getElementById('resumen').value;
    

    $.ajax({
    method: 'POST', // Type of response and matches what we said in the route
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/editorMacrozonaResumen/update', // This is the url we gave in the route
    data: {subseccion_id: subseccion_id, macrozona_id: macrozona_id, resumen: contentResumen, boletin_id: boletin_id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        alert('Se ha editado correctamente');
        console.log(response);
        //window.location.href = response;
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        //console.log(JSON.stringify(jqXHR));
        //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
    });

 }
 function contadorVisita()
{
  $.ajax({
      method: 'GET', // Type of response and matches what we said in the route
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/contador/graficos', // This is the url we gave in the route
      //data: {boletin_id: boletin_id, seccion_id: seccion_id, contenido: contentTinymce}, // a JSON object to send back
      success: function(response){ // What to do if we succeed
          //console.log(response);
          //window.location.href = response;
          $('#bodyModalVisitas').empty();
          $('#bodyModalVisitas').append('<p style="word-wrap: break-word;"><strong>Cantidad : </strong>'+ response +'</p>');
          
      },
      error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
          //console.log(JSON.stringify(jqXHR));
          //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      }
    });
}

 function contadorVisitaDMC()
{
  $.ajax({
      method: 'GET', // Type of response and matches what we said in the route
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/contador/graficos/dmc', // This is the url we gave in the route
      //data: {boletin_id: boletin_id, seccion_id: seccion_id, contenido: contentTinymce}, // a JSON object to send back
      success: function(response){ // What to do if we succeed
          //console.log(response);
          //window.location.href = response;
          $('#bodyModalVisitasDMC').empty();
          $('#bodyModalVisitasDMC').append('<p style="word-wrap: break-word;"><strong>Cantidad : </strong>'+ response +'</p>');
          
      },
      error: function(jqXHR, textStatus, errorThrown) { 
          // What to do if we fail
          //console.log(JSON.stringify(jqXHR));
          //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      }
    });
}
function quitarAlerta()
{

  var idSeccion = document.getElementById('idSubSeccion').value
  var idMacrozona = document.getElementById('idMacrozona').value
  var idBoletin = document.getElementById('idBoletin').value
  console.log( idSeccion  + ' ' + idMacrozona + ' ' + idBoletin)
  $.ajax({
      method: 'GET', // Type of response and matches what we said in the route
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/quitar/alertaMacro/'+ idSeccion + '/' + idBoletin + '/' + idMacrozona, // This is the url we gave in the route
      //data: {boletin_id: boletin_id, seccion_id: seccion_id, contenido: contentTinymce}, // a JSON object to send back
      success: function(response){ // What to do if we succeed
          //console.log(response);
          //window.location.href = response;
          console.log(response)
         
          
      },
      error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
          //console.log(JSON.stringify(jqXHR));
          //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      }
    });
}

</script>
@endsection
