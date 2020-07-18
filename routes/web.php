<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function() {
Route::post('registroA','RegistroController@store'); 

    /*Alumnos    
    Route::post('alumnos/store','AlumnoController@store')->name('alumnos.store')
            ->middleware('permission:alumnos.create');
    Route::get('alumnos','AlumnoController@index')->name('alumnos.index')
            ->middleware('permission:alumnos.index');

    Route::get('alumnos/create','AlumnoController@create')->name('alumnos.create')
            ->middleware('permission:alumnos.create');

    Route::put('alumnos/{alumno}','AlumnoController@update')->name('alumnos.update')
            ->middleware('permission:alumnos.edit');

    Route::get('alumnos/{alumno}','AlumnoController@show')->name('alumnos.show')
            ->middleware('permission:alumnos.show');

    Route::delete('alumnos/{alumno}','AlumnoController@destroy')->name('alumnos.destroy')
            ->middleware('permission:alumnos.destroy');

    Route::get('alumnos/{alumno}/edit','AlumnoController@edit')->name('alumnos.edit')
            ->middleware('permission:alumnos.edit');  */
//alumnoNavegacion
      Route::get('alumno','AlumnoController@indexDatosGenerales')->name('alumno.indexDatosGenerales')
      ->middleware('permission:alumno.index'); 
      //creacion  
      Route::post('alumno/datosGenerales/create','AlumnoController@indexDatosGeneralesC')->name('alumno.indexDatosGeneralesC')
      ->middleware('permission:alumno.create');             
      //eliminacion
      Route::post('alumno/datosGenerales/destroy','AlumnoController@indexDatosGeneralesE')->name('alumno.indexDatosGeneralesE')
      ->middleware('permission:alumno.destroy'); 
    
      //navegacion
      Route::get('alumno/escolar','AlumnoController@indexEscolar')->name('alumno.indexEscolar')
      ->middleware('permission:alumno.escolar');  
      //creacion
      Route::post('alumno/alumno/escolar/create','AlumnoController@indexEscolarC')->name('alumno.indexEscolar')
      ->middleware('permission:alumno.escolarCreate');  
      //eliminacion
      Route::get('alumno/escolar/destroy','AlumnoController@indexEscolarE')->name('alumno.indexEscolarE')
      ->middleware('permission:alumno.escolarDestroy');  


      Route::get('alumno/familiares','AlumnoController@indexFamiliares')->name('alumno.indexFamiliares')
      ->middleware('permission:alumno.familiar');  
      Route::get('alumno/solicitud','AlumnoController@indexSolicitud')->name('alumno.indexSolicitud')
      ->middleware('permission:alumno.solicitud');  
      Route::get('alumno/empresa','AlumnoController@indexEmpresa')->name('alumno.indexEmpresa')
      ->middleware('permission:alumno.empresa');  
      Route::get('alumno/anteproyecto','AlumnoController@indexAnteproyecto')->name('alumno.indexAnteproyecto')
      ->middleware('permission:alumno.anteproyecto');          
      Route::get('alumno/proyecto','AlumnoController@indexProyecto')->name('alumno.indexProyecto')
      ->middleware('permission:alumno.proyecto');  

            
    //jefe navegacion
    Route::get('jefe','JefeController@index')->name('jefe.index')
        ->middleware('permission:jefe.index');   
    Route::get('jefe/proyectos','JefeController@indexProyectos')->name('jefe.indexProyectos')
        ->middleware('permission:jefe.index');  
    Route::get('jefe/token','JefeController@indexToken')->name('jefe.indexToken')
        ->middleware('permission:jefe.index');  
    Route::get('jefe/docentes','JefeController@indexDocentes')->name('jefe.indexDocentes')
        ->middleware('permission:jefe.index');  
    Route::get('jefe/asesores','JefeController@indexAsesores')->name('jefe.indexAsesores')
        ->middleware('permission:jefe.index');  
    Route::get('jefe/egresado','JefeController@indexEgresado')->name('jefe.indexEgresado')
        ->middleware('permission:jefe.index');          
    Route::get('jefe/registrar','JefeController@indexRegistrar')->name('jefe.indexRegistrar')
        ->middleware('permission:jefe.index');  
    Route::get('jefe/archivos','JefeController@indexArchivos')->name('jefe.indexArchivos')
        ->middleware('permission:jefe.index');  
   //asesor
     Route::get('asesor','AsesorController@index')->name('asesor.index')
        ->middleware('permission:asesor.index');              
   //docente
     Route::get('docente','DocenteController@index')->name('docente.index')
        ->middleware('permission:docente.index');  
});