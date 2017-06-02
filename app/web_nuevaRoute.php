<?php
Route::group(array('prefix' => 'web_nueva'), function()
{
	//Home
    Route::get('', 'NuevaWebController@getHomeNoticias');
		

    //Competencias
    Route::get('estadisticas', ['as'=>'contacto','uses'=>'NuevaWebController@estadisticas']);

    //Equipos
    Route::get('participantes', 'NuevaWebController@participantes');
    Route::get('estadios', 'NuevaWebController@estadios');

    //Estadisticas
    Route::get('estadisticas', ['as'=>'contacto','uses'=>'NuevaWebController@estadisticas']);
    

    //Marketing
    Route::get('accion', ['as'=>'contacto','uses'=>'NuevaWebController@accion']);
    Route::get('sponsornew', ['as'=>'sponsornew','uses'=>'NuevaWebController@sponsornew']);

    
	//Noticias
	Route::get('noticia/{id?}', 'NuevaWebController@getNoticia');
    Route::get('noticias', 'NuevaWebController@getNoticias');
    Route::get('especiales',  ['as'=>'especiales','uses'=>'NuevaWebController@especiales']);
	Route::get('entrevista',  ['as'=>'entrevista','uses'=>'NuevaWebController@entrevista']);



    //Multimedia
    Route::get('galeria', ['as'=>'galeria','uses'=>'NuevaWebController@accion']);    
    Route::get('descargas', ['as'=>'descargas','uses'=>'NuevaWebController@accion']);    
    Route::get('videos', ['as'=>'videos','uses'=>'NuevaWebController@accion']);    


    //Institucional
    Route::get('historia', ['as'=>'historia','uses'=>'NuevaWebController@historia']);
    Route::get('staff', ['as'=>'staff','uses'=>'NuevaWebController@staff']);
    Route::get('autoridades', ['as'=>'autoridades','uses'=>'NuevaWebController@autoridades']);
    Route::get('social', ['as'=>'social','uses'=>'NuevaWebController@social']);
    Route::get('contacto', ['as'=>'contacto','uses'=>'NuevaWebController@contacto']);


	



});	