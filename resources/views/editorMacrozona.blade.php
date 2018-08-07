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
                      <p>Directorio: {{ $dirname }}</p>
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
                          <div class="desc">Add a description of the image here</div>
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
<script>
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
image: "{{ URL::to('/') }}/images//grafico.png",
tooltip: "Gráficos de información",
onclick: function () {
alert("Proximamente");
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
$( document ).ready(function() {
    $("#resumen").on('change keyup paste', function() {
      unsavedResumen = true;
    // your code here
});
});

function unloadPage(){
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
    console.log(selectContent);
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
    console.log(contentResumen);

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
</script>
@endsection
