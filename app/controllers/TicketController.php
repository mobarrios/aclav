<?php

class TicketController extends BaseController
{
	protected $moduloId = '77';

	protected $up;
	protected $imgPath 	= 'uploads/ticket/'; 

	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();

	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Ticket";
		$data['model']	= Ticket::orderBy('estado','DESC')->paginate(10);

		return View::make('config.ticket.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Ticket";
		$data['action'] = "create";
		return View::make('config.ticket.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();
		/*$up 	= $this->up->up($input['imagen'] , $this->imgPath );

			if($up != false)
			{
				$input['imagen'] = $up;
			}
			else
  {
   return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
  }*/

		Ticket::create($input);

		return $this->getIndex();

	}


	//clickeo en editar
	public function getEdit($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$data['modelo'] =  Ticket::find($id);
		$data['modulo'] = "Ticket";
		$data['action'] = "edit";

		return View::make('config.ticket.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$ticket	= Ticket::find($id);
		$input  	= Input::all();

				

		$ticket->fill($input);
		$ticket->save();

		return $this->getIndex();
	}

}

?>