<?php
Route::group(array('prefix' => 'web_nueva'), function()
{
	//Home
    Route::get('', [ 'as'=>'inicio','uses'=>'NuevaWebController@getHomeNoticias']);
		

    //Competencias
    Route::get('calendario', ['as'=>'calendario','uses'=>'NuevaWebController@calendario']);
    Route::get('formula', ['as'=>'formula','uses'=>'NuevaWebController@formula']);
    Route::get('posiciones', ['as'=>'posiciones','uses'=>'NuevaWebController@posiciones']);
    Route::get('tribunal', ['as'=>'tribunal','uses'=>'NuevaWebController@tribunal']);
   

    //Equipos
    Route::get('participantes', [ 'as' => 'participantes' , 'uses' => 'NuevaWebController@participantes']);
    Route::get('estadios', [ 'as'=>'estadios' ,'uses'=>'NuevaWebController@estadios']);
    Route::get('estadio/{id}', [ 'as'=>'detalle_estadio' ,'uses'=>'NuevaWebController@detalle_estadio']);
    Route::get('participantes/{id}', ['as'=>'detalle_equipo' ,'uses'=>'NuevaWebController@detalle_equipo']);
    Route::get('jugador/{id}', ['as'=>'jugador' ,'uses'=>'NuevaWebController@jugador']);
    Route::get('staff/{id}', ['as'=>'detalle_staff' ,'uses'=>'NuevaWebController@detalle_staff']);
   

    //Estadisticas
    Route::get('estadisticas', ['as'=>'contacto','uses'=>'NuevaWebController@estadisticas']);
    Route::get('jugadores', ['as'=>'jugadores','uses'=>'NuevaWebController@jugadores']);
    Route::get('individuales', ['as'=>'individuales','uses'=>'NuevaWebController@individuales']);
    Route::get('entreequipos', ['as'=>'entreequipos','uses'=>'NuevaWebController@entreequipos']);        
    Route::get('porequipo', ['as'=>'porequipo','uses'=>'NuevaWebController@porequipo']);        
    Route::get('records', ['as'=>'records','uses'=>'NuevaWebController@records']);        
    Route::get('curiosidades', ['as'=>'curiosidades','uses'=>'NuevaWebController@curiosidades']);        
        

    //Marketing
    Route::get('accion', ['as'=>'contacto','uses'=>'NuevaWebController@accion']);
    Route::get('sponsornew', ['as'=>'sponsornew','uses'=>'NuevaWebController@sponsornew']);

    
	//Noticias
	Route::get('noticia/{id}', [ 'as' => 'detalle_noticias', 'uses' => 'NuevaWebController@detalle_noticias']);
    Route::get('noticia/{id?}', 'NuevaWebController@getNoticia');
    Route::get('noticias', [ 'as' => 'noticias', 'uses' => 'NuevaWebController@noticias']);
    Route::get('especiales',  ['as'=>'especiales','uses'=>'NuevaWebController@especiales']);
	Route::get('entrevistas',  ['as'=>'entrevistas','uses'=>'NuevaWebController@entrevistas']);
    Route::get('social', ['as'=>'social','uses'=>'NuevaWebController@social']);



    //Multimedia
    Route::get('galeria', ['as'=>'galeria','uses'=>'NuevaWebController@galeria']);    
    Route::get('galeria/{id}', ['as'=>'detalle_galeria','uses'=>'NuevaWebController@detalle_galeria']);   
    Route::get('album/{id}', ['as'=>'album','uses'=>'NuevaWebController@album']);   
     
    
    Route::get('descargas', ['as'=>'descargas','uses'=>'NuevaWebController@descargas']);   
    Route::get('download/{id}', ['as'=>'download','uses'=>'NuevaWebController@download']); 
    Route::get('videos', ['as'=>'videos','uses'=>'NuevaWebController@videos']);    


    //Institucional
    Route::get('historia', ['as'=>'historia','uses'=>'NuevaWebController@historia']);
    Route::get('staff', ['as'=>'staff','uses'=>'NuevaWebController@staff']);
    Route::get('autoridades', ['as'=>'autoridades','uses'=>'NuevaWebController@autoridades']);
    Route::get('sponsors', ['as'=>'sponsors','uses'=>'NuevaWebController@sponsors']);
    
    Route::get('contacto', ['as'=>'contacto',       'uses'=>'NuevaWebController@contacto']);
    //Route::post('procesar',['as'=>'contacto.procesar', 'uses'=>'NuevaWebController@procesar' ])
    /*
    Route::post('news', function(){

        $input  =  Input::all();
        dd($input);

    });
    */    
    Route::post('contacto', ['as'=>'contacto.procesar',  'action' => 'NuevaWebController@procesar' ]);
   // Route::post(array('action' => 'NuevaWebController@procesar'));

});	