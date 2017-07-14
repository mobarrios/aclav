<?php
Route::group(array('prefix' => 'web_nueva'), function()
{
	//Home
    Route::get('', array( 'as'=>'inicio','uses'=>'NuevaWebController@getHomeNoticias'));
		

    //Competencias
    Route::get('calendario/{id}', array('as'=>'calendario','uses'=>'NuevaWebController@calendario'));
    Route::get('formula', array('as'=>'formula','uses'=>'NuevaWebController@formula'));
    Route::get('posiciones', array('as'=>'posiciones','uses'=>'NuevaWebController@posiciones'));
    Route::get('tribunal', array('as'=>'tribunal','uses'=>'NuevaWebController@tribunal'));
   

    //Equipos
    Route::get('participantes', array( 'as' => 'participantes' , 'uses' => 'NuevaWebController@participantes'));
    Route::get('estadios', array( 'as'=>'estadios' ,'uses'=>'NuevaWebController@estadios'));
    Route::get('estadio/{id}', array( 'as'=>'detalle_estadio' ,'uses'=>'NuevaWebController@detalle_estadio'));
    Route::get('participantes/{id}', array('as'=>'detalle_equipo' ,'uses'=>'NuevaWebController@detalle_equipo'));
    Route::get('jugador/{id}', array('as'=>'jugador' ,'uses'=>'NuevaWebController@jugador'));
    Route::get('staff/{id}', array('as'=>'detalle_staff' ,'uses'=>'NuevaWebController@detalle_staff'));
   

    //Estadisticas
    Route::get('estadisticas', array('as'=>'contacto','uses'=>'NuevaWebController@estadisticas'));
    Route::get('jugadores', array('as'=>'jugadores','uses'=>'NuevaWebController@jugadores'));
    Route::get('individuales', array('as'=>'individuales','uses'=>'NuevaWebController@individuales'));
    Route::get('entreequipos', array('as'=>'entreequipos','uses'=>'NuevaWebController@entreequipos'));        
    Route::get('porequipo', array('as'=>'porequipo','uses'=>'NuevaWebController@porequipo'));        
    Route::get('records', array('as'=>'records','uses'=>'NuevaWebController@records'));        
    Route::get('curiosidades', array('as'=>'curiosidades','uses'=>'NuevaWebController@curiosidades'));        
        

    //Marketing
    Route::get('accion', array('as'=>'contacto','uses'=>'NuevaWebController@accion'));
    Route::get('sponsornew', array('as'=>'sponsornew','uses'=>'NuevaWebController@sponsornew'));

    
	//Noticias
	Route::get('noticia/{id}', array( 'as' => 'detalle_noticias', 'uses' => 'NuevaWebController@detalle_noticias'));
    Route::get('noticia/{id?}', 'NuevaWebController@getNoticia');
    Route::get('noticias', array( 'as' => 'noticias', 'uses' => 'NuevaWebController@noticias'));
    Route::get('especiales',  array('as'=>'especiales','uses'=>'NuevaWebController@especiales'));
	Route::get('entrevistas',  array('as'=>'entrevistas','uses'=>'NuevaWebController@entrevistas'));
    Route::get('social', array('as'=>'social','uses'=>'NuevaWebController@social'));



    //Multimedia
    Route::get('galeria', array('as'=>'galeria','uses'=>'NuevaWebController@galeria'));    
    Route::get('galeria/{id}', array('as'=>'detalle_galeria','uses'=>'NuevaWebController@detalle_galeria'));   
    Route::get('album/{id}', array('as'=>'album','uses'=>'NuevaWebController@album'));   
     
    
    Route::get('descargas', array('as'=>'descargas','uses'=>'NuevaWebController@descargas'));   
    Route::get('download/{id}', array('as'=>'download','uses'=>'NuevaWebController@download')); 
    Route::get('videos', array('as'=>'videos','uses'=>'NuevaWebController@videos'));    
    Route::get('videos/{id}', array('as'=>'detalle_video','uses'=>'NuevaWebController@detalle_video'));    


    //Institucional
    Route::get('historia', array('as'=>'historia','uses'=>'NuevaWebController@historia'));
    Route::get('staff', array('as'=>'staff','uses'=>'NuevaWebController@staff'));
    Route::get('autoridades', array('as'=>'autoridades','uses'=>'NuevaWebController@autoridades'));
    Route::get('sponsors', array('as'=>'sponsors','uses'=>'NuevaWebController@sponsors'));
    
    Route::get('contacto', array('as'=>'contacto',       'uses'=>'NuevaWebController@contacto'));
    //Route::post('procesar',array('as'=>'contacto.procesar', 'uses'=>'NuevaWebController@procesar' ))
    /*
    Route::post('news', function(){

        $input  =  Input::all();
        dd($input);

    });
    */    
    Route::post('contacto', array('as'=>'contacto.procesar',  'action' => 'NuevaWebController@procesar' ));
   // Route::post(array('action' => 'NuevaWebController@procesar'));

});	