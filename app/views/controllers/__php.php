<?php

class HabilitacionesController extends BaseController
{
	
	//protected $up;
	//protected $imgPath 	= 'uploads/arbitro/'; 
	protected $data = array();

	//constructor 
	public function __construct()
	{

		//$this->up 	 = 	new upload();
		$this->data['modulo'] 	=  'habilitaciones';

	}

	//al inicio
	public function getIndex($id = null)
	{
		$temporada = Crypt::decrypt($id);

		//$data['designaciones'] = Designaciones::where('arbitro_id','=',Auth::user()->arbitro_id)->get();

		$this->data['model'] 	     = Torneos::where('temporada_id','=',$temporada)->get();


		return View::make('habilitaciones.index')->with($this->data);
	}

	public function getConfirmar($id)
	{

		$designacion = Designaciones::where('partido_id','=',$id)->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$designacion->estado = '1';
		
		$designacion->save();

		return Redirect::back();	
	}

	public function postRechazar()
	{
		$input = Input::all();

		$designacion = Designaciones::where('partido_id','=',$input['partido_id'])->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$designacion->estado = '2';
		$designacion->observaciones = $input['causa'];

		$designacion->save();

		return Redirect::back();	
	}



}
?>