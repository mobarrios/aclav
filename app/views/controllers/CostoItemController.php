<?php

class CostoItemController extends BaseController
{
	
	protected $moduloId       = '89';
	protected $data = array();

	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$this->data['modulo'] 		= 	'Costos  Items ';
		$this->data['model']		=	CostoItem::orderBy('detalle','ASC')->get();
	
		return View::make('costo.costo_item.index')->with($this->data);
	}


	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'agregar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        $data['modulo'] = "Estadio";
		$data['action'] = "create";
		return View::make('costo.costo_item.form')->with($data);

	}

	public function postNew()
	{
		$input = Input::all();

		CostoItem::create($input);

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);

		CostoItem::find($id)->delete();

		return Redirect::back();
	}

	public function getEdit($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);
		$data['modelo'] =  CostoItem::find($id);
		$data['modulo'] = "Costo Items";
		$data['action'] = "edit";

		return View::make('costo.costo_item.form')->with($data);
	}

	public function postEdit($id)
	{
		$input 		= Input::all();
		$costo_item = CostoItem::find(Crypt::decrypt($id));
		$costo_item->fill($input);
		$costo_item->save();

		return $this->getIndex();

	}
}
?>