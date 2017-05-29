<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex()
	{		
		//guarda el valor de la temporada actual
		$temporada_actual = Temporada::where('actual','=',1)->get();

		if($temporada_actual->count() != 0 )
		{
			Session::put('temporada_actual_id',$temporada_actual->first()->id);	
		}

		if( Auth::user()->equipo_id != 0)
		{
			Session::put('equipo_id', Auth::user()->equipo_id );
		}
		
		if(Auth::user()->Profiles->is_arbitro == '1')
		{
			return Redirect::to('perfil_arbitro');
		}
		elseif(Auth::user()->Profiles->is_supervisor == '1')
		{
			return Redirect::to('perfil_supervisor');
		}

		return View::make('home');
	}



	/*
	public function showWelcome()
	{
		return View::make('hello');
	}*/

}