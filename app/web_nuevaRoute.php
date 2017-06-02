<?php
Route::group(array('prefix' => 'web_nueva'), function()
{
	//Home
    Route::get('', 'NuevaWebController@getHomeNoticias');
		

    //Equipos
    Route::get('participantes', 'NuevaWebController@participantes');
    Route::get('estadios', 'NuevaWebController@estadios');





	//Noticias
	Route::get('noticia/{id?}', 'NuevaWebController@getNoticia');
    Route::get('noticias', 'NuevaWebController@getNoticias');
    Route::get('especiales',  'NuevaWebController@especiales');
	Route::get('entrevista',  'NuevaWebController@entrevista');


	



    //Marketing
	Route::get('accion', 'NuevaWebController@accion');
    Route::get('sponsornew', 'NuevaWebController@sponsornew');

    //Institucional
    Route::get('historia', 'NuevaWebController@historia');
    Route::get('staff', 'NuevaWebController@staff');
    Route::get('autoridades', 'NuevaWebController@autoridades');
    Route::get('social', 'NuevaWebController@social');
    Route::get('contacto', 'NuevaWebController@contacto');


	



});	