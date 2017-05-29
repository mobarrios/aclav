<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function validarPermisos($modulo = null ,$sector = null)
	{
		//return Auth::User()->permisos($modulo)->$sector;
		
			if(Auth::User()->permisos($modulo)->$sector == '0')
			{
				return false;
			}
			return true;
	}

	public function getXls()
	{
			Excel::create('pelado', function($excel) {

				$data  = Novedad::all();

				$excel->sheet('hoja', function($sheet) use($data) {

					$sheet->fromModel($data);

				});

			})->download('xls');

	}

	public function getPdf()
	{
	
		$data = array('novedades' => Novedad::all() );

		$pdf = PDF::loadView('novedades.reporte', $data);

		return $pdf->stream();

 		
		$pdf = App::make('dompdf');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
	}

	public function bread($history)
	{
		Session::put('history',$history);
	}

}