<?php
 
class LoginController extends BaseController
{

	public function getIndex()
	{

	
	}
	public function logIn()
	{

		if(Auth::attempt(array('usuario' => Input::get('usuario'), 'password' => Input::get('password'))))
		{
			if(Auth::user()->usuario == 'aclav')
			{
				Session::put('db','mysql_test');
				//Config::setDatabaseName('admin_aclavprueba');	
				//	Config::set('database.connections', 'mysql_test');
				//	return Config::get('database');
				// Config::set('database.default','mysql_test');
			}
			else
			{
				Session::put('db','mysql');
			}

			return Redirect::to('home');
		}
		
		return View::make('login');
	}


	public function logOut()
	{
		Auth::logout();
		
		return View::make('login');
	}	
}

?>