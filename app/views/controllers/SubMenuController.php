<?php

class SubMenuController extends BaseController
{

	protected $moduloId ;
	protected $carpetaModulo  = 'config.submenu';
	protected $ruta           = 'submenu';

	public function getIndex($id= null)
	{

		$id = Crypt::decrypt($id);

		$data['modelos']	=	SubMenu::where('menu_id','=', $id)->get();
		$data['menu']		=	Menu::find($id);
		$data['modulo']		= 	'submenu';
		return View::make($this->carpetaModulo.'.index')->with($data);
	}


	public function getNew($id = null )
	{	
		$data['menu_id']	=	$id; 	
		$data['modulo']		=	'submenu';
		$data['action'] 	= 	'create';
		$data['modulos']	= 	Modulos::lists('modulo','id');

		return View::make('config.submenu.form')->with($data);
	}


	public function postNew()
	{
		$input  =   Input::all();

        if(SubMenu::create($input))
        {
            return Redirect::back()->with('success','Registro creado Correctamente');

        }else{

            return Redirect::back()->with('danger','Error');
        }

	}


	public function postEdit($id = null)
	{
		$menu    =   SubMenu::find(Crypt::decrypt($id));
        $input   =   Input::all();
        
        $menu->fill($input);
        $menu->save();

		return Redirect::back()->with('success','Registro Editado Correctamente');

	}


	public function getEdit($id = null)
	{

		$data['modulo']		=	'Menu';
		$data['modelo']		= 	SubMenu::find(Crypt::decrypt($id));
		$data['action'] 	= 	'editar';
		$data['modulos']	= 	Modulos::lists('modulo','id');

		return View::make('config.submenu.form')->with($data);
	}


	public function getDel($id = null)
	{
		$modelo = SubMenu::find(Crypt::decrypt($id))->delete();
		return Redirect::back()->with('success','Registro Eliminado Correctamente');
	}

	


}



?>