<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdfView', 'HomeController@vistaPdf')->name('pdfView');

//Rutas Públicas

//Traer todas las publicaciones
Route::get("/public/publicaciones","PublicHtmlController@index", ['except' => ['boletinHtml']])->name('publicPublicaciones');

//Traer todos los boletines y resumen de la publicacion
Route::get('public/publicacion/{publicacion}','PublicHtmlController@show')->name('publicPublicacion.show');

//Descargar el XML publico
Route::get('public/xmlview/{publicacion}','BoletinController@generarXML')->name('xmlviewPublic');

//Mostrar las secciones de un boletín
Route::get('public/boletines/{boletin}','PublicHtmlController@showBoletin')->name('Publicboletines.show');

Route::get('public/resumen/{resumen}','PublicHtmlController@showResumen')->name('PublicResumen.show');

Route::get('public/resumenPDF/{resumen}','PublicHtmlController@pdfResumen')->name('PublicResumenPDF');

Route::get('public/boletinPDF/{boletin}','PublicHtmlController@pdfBoletin')->name('PublicBoletinPDF');	



//Routes
Route::get("download-pdf","HomeController@downloadPDF");
Route::middleware(['auth'])->group(function(){
	//Roles
	Route::post('roles/store','RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');

	//Productos
	Route::post('products/store','ProductController@store')->name('products.store')
		->middleware('permission:products.create');

	Route::get('products','ProductController@index')->name('products.index')
		->middleware('permission:products.index');

	Route::get('products/create','ProductController@create')->name('products.create')
		->middleware('permission:products.create');

	Route::put('products/{product}','ProductController@update')->name('products.update')
		->middleware('permission:products.edit');

	Route::get('products/{product}','ProductController@show')->name('products.show')
		->middleware('permission:products.show');

	Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
		->middleware('permission:products.destroy');

	Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
		->middleware('permission:products.edit');

	//Usuarios

	Route::post('users/store','UserController@store')->name('users.store')
		->middleware('permission:users.create');

	Route::get('users','UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::get('users/create','UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}','UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	Route::get('users/{user}/macrozonas','UserController@vistaMacrozonas')->name('users.macrozonas')
		->middleware('permission:users.edit');
	Route::put('users/macrozonas/{user}','UserController@agregarMacrozonas')->name('users.guardarmacrozonas')
		->middleware('permission:users.edit');

	Route::get('users/{user}/editpassword','UserController@cambiarContraseñaVista')->name('users.editpassword');
		

	Route::put('users/{user}/edit/password','UserController@cambiarContraseña')->name('users.editpasswordrequest');

	//Rutas Editar password personalmente por cada usuario
	Route::get('user/{user}/editpassword','UserController@editPasswordByUserVista')->name('users.editpasswordbyUser');
		
	Route::put('user/{user}/edit/password','UserController@editPasswordByUser')->name('users.editpasswordrequestByUser');
		
	Route::get('show/{user}/info','UserController@showByUser')->name('users.showByUser');

	Route::get('editByUser/{user}/info','UserController@editByUserView')->name('users.editByUser');

	Route::put('editByUser/{user}/edit/password','UserController@editByUser')->name('users.editByUserRequest');
		

	Route::get('users/{user}/secciones','UserController@vistaSecciones')->name('users.secciones')
		->middleware('permission:users.edit');
	Route::put('users/secciones/{user}','UserController@agregarSecciones')->name('users.guardarsecciones')
		->middleware('permission:users.edit');

	//Publicaciones
	Route::post('publicaciones/store','PublicacionController@store')->name('publicaciones.store')
		->middleware('permission:boletines.create');

	Route::get('publicaciones','PublicacionController@index')->name('publicaciones.index')
		->middleware('permission:boletines.index');

	Route::get('publicaciones/create','PublicacionController@create')->name('publicaciones.create')
		->middleware('permission:boletines.create');

	Route::get('publicaciones/{publicacion}','PublicacionController@show')->name('publicaciones.show')
		->middleware('permission:publicaciones.show');

	Route::get('publicaciones/eleccion/{publicacion}','PublicacionController@vistaElegir')->name('publicaciones.vistaElegir')
		->middleware('permission:boletines.create');

	Route::put('publicaciones/elegido/{publicacion}','PublicacionController@elegirPublicacion')->name('publicaciones.elegirPublicacion')
		->middleware('permission:boletines.show');
		
	Route::get('publicaciones/{publicacion}/abrircerrar','PublicacionController@vistaAbrirCerrarBoletines')->name('publicaciones.abrirCerrar')
		->middleware('permission:admin');

	Route::get('publichtml/habilitar/deshabilitar','PublicacionController@publicHtmlvista')->name('publichtml.enabledisable')->middleware('permission:admin');

	Route::put('publichtml/{publicacion}/habilitar/deshabilitarRequest','PublicacionController@habilitarDeshabilitar')->name('publichtml.enabledisableRequest')
		->middleware('permission:admin');

	Route::get('publichtml/{publicacion}/boletines','PublicacionController@publicBoletinesVista')->name('publichtml.boletines.show')
		->middleware('permission:admin');

	Route::put('publichtml/{boletin}/boletinRequest','PublicacionController@publicBoletin')->name('publichtml.boletin.enabledisable')
		->middleware('permission:admin');

	Route::put('publichtml/{publicacion}/habilitarTodos','PublicacionController@publicBoletinHabilitarTodos')->name('publichtml.boletin.habilitarTodos')
		->middleware('permission:admin');

	Route::put('publichtml/{publicacion}/deshabilitarTodos',
		'PublicacionController@publicBoletinDeshabilitarTodos')
		->name('publichtml.boletin.deshabilitarTodos')
		->middleware('permission:admin');

	Route::get('publicacion/edit/{publicacion}','PublicacionController@edit')->name('publicacion.edit')
		->middleware('permission:publicacion.edit');

	Route::put('publicacion/update/{publicacion}','PublicacionController@update')->name('publicacion.update')
		->middleware('permission:publicacion.update');

	Route::get('adminImages','AdminImagesController@index')->name('adminImages.view')
		->middleware('permission:publicacion.edit');

	Route::get('publicacion/eliminarElegir','PublicacionController@eliminarElegir')->name('elegir.eliminar')
		->middleware('permission:publicacion.eliminar.elegir');

	//Boletines

	Route::post('boletines/store','BoletinController@store')->name('boletines.store')
		->middleware('permission:boletines.create');

	Route::get('boletines','BoletinController@index')->name('boletines.index')
		->middleware('permission:boletines.index');

	Route::get('boletines/create','BoletinController@create')->name('boletines.create')
		->middleware('permission:boletines.create');

	Route::get('boletines/{boletin}','BoletinController@show')->name('boletines.show')
		->middleware('permission:boletines.show');

	Route::put('boletines/cerrar/{boletin}/{publicacion}','PublicacionController@cerrarBoletin')->name('boletines.cerrar')
		->middleware('permission:boletines.show');

	Route::put('boletines/abrir/{boletin}/{publicacion}','PublicacionController@abrirBoletin')->name('boletines.abrir')
		->middleware('permission:boletines.show');

	Route::put('boletines/abrirTodos/{publicacion}','PublicacionController@abrirTodosBoletines')->name('boletines.abrirtodos')
		->middleware('permission:boletines.show');

	Route::put('boletines/cerrarTodos/{publicacion}','PublicacionController@cerrarTodosBoletines')->name('boletines.cerrartodos')
		->middleware('permission:boletines.show');


    Route::get('pdfExport/{boletin}','PdfBoletinController@exportarPDF')->name('boletines.pdfTemplate');

	Route::get('editor/{boletin}/{seccion}','BoletinController@editarSeccion')->name('editor');

	Route::post('/editor/update','BoletinController@guardarEdicion')->name('editor.update');

	Route::get('editorResumen/{resumen}/{region}','ResumenController@vistaSeccionResumen')->name('editorresumen');

	Route::post('/editorResumen/update','ResumenController@guardarEdicion')->name('editorresumen.update');

	Route::get('editorMacrozona/{boletin}/{subseccion}/{macrozona}','BoletinController@editarSeccionMacrozona')->name('editormacrozona');

	Route::post('/editorMacrozona/update','BoletinController@guardarEdicionMacrozona')->name('editormacrozona.update');

	
	Route::post('/editorMacrozonaResumen/update','BoletinController@guardarEdicionMacrozonaResumen')
		->name('editormacrozonaresumen.update');


	//Rubros

	Route::get('rubros/create','RubroController@create')->name('rubros.create')
		->middleware('permission:users.create');

	Route::post('rubros/store','RubroController@store')->name('rubros.store')
		->middleware('permission:users.create');

	Route::get('rubros','RubroController@index')->name('rubros.index')
		->middleware('permission:boletines.index');

	Route::get('rubros/{rubro}','RubroController@show')->name('rubros.show')
		->middleware('permission:boletines.show');

	Route::get('rubros/{rubro}/edit','RubroController@edit')->name('rubros.edit')
		->middleware('permission:users.edit');

	Route::put('rubros/{rubro}','RubroController@update')->name('rubros.update')
		->middleware('permission:users.edit');

	Route::delete('rubros/{rubro}','RubroController@destroy')->name('rubros.destroy')
		->middleware('permission:roles.destroy');

	//Regiones
	
	Route::get('regiones/create','RegionController@create')->name('regiones.create')
		->middleware('permission:users.create');

	Route::post('regiones/store','RegionController@store')->name('regiones.store')
		->middleware('permission:users.create');

	Route::get('regiones','RegionController@index')->name('regiones.index')
		->middleware('permission:boletines.index');

	Route::get('regiones/{region}','RegionController@show')->name('regiones.show')
		->middleware('permission:boletines.show');

	Route::get('regiones/{region}/edit','RegionController@edit')->name('regiones.edit')
		->middleware('permission:users.edit');

	Route::put('regiones/{region}','RegionController@update')->name('regiones.update')
		->middleware('permission:users.edit');

	Route::delete('regiones/{region}','RegionController@destroy')->name('regiones.destroy')
		->middleware('permission:roles.destroy');	

	//Macrozonas
	
	Route::get('macrozonas/create','MacrozonaController@create')->name('macrozonas.create')
		->middleware('permission:users.create');

	Route::post('macrozonas/store','MacrozonaController@store')->name('macrozonas.store')
		->middleware('permission:users.create');

	Route::get('macrozonas','MacrozonaController@index')->name('macrozonas.index')
		->middleware('permission:boletines.index');

	Route::get('macrozonas/{macrozona}','MacrozonaController@show')->name('macrozonas.show')
		->middleware('permission:boletines.show');

	Route::get('macrozonas/{macrozona}/edit','MacrozonaController@edit')->name('macrozonas.edit')
		->middleware('permission:users.edit');

	Route::put('macrozonas/{macrozona}','MacrozonaController@update')->name('macrozonas.update')
		->middleware('permission:users.edit');

	Route::delete('macrozonas/{macrozona}','MacrozonaController@destroy')->name('macrozonas.destroy')
		->middleware('permission:roles.destroy');

	Route::get('xmlview/{publicacion}','BoletinController@generarXML')->name('xmlview')
		->middleware('permission:boletines.index');	

	//Resumen Nacional

	Route::get('resumen/{resumen}','ResumenController@show')->name('resumenes.show')
		->middleware('permission:resumen.show');

	Route::get('resumenPDF/{resumen}','ResumenController@descargarPDF')->name('resumenespdf')
		->middleware('permission:resumen.show');

	//Mis Colaboradores

	Route::get('colaboradores','ColaboradorController@index')->name('colaboradores.index');

	Route::get('colaborador/{user}/send','ColaboradorController@email')->name('user.email');

	Route::post('colaborador/sendup/{colaborador}','ColaboradorController@send')->name('user.emailsend');

	Route::get('colaborador/guia','ColaboradorController@guia')->name('user.guia');

});
