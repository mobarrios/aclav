<?php


class Menu extends Eloquent
{
	
	protected $table = "menu";

	protected $fillable = array('nombre','modulos_id','icon','sub');

	public  function subMenu()
	{
		return $this->hasMany('SubMenu');

	}



	public static function armaMenu()
	{

		$print 		= 	null;
		
		//recorre toda la tabla menu
		foreach(Menu::all() as $val => $key)
		{			

			//si tiene asignado un id de modulo 
			if($key->modulos_id != 0)
			{
				//no tiene submenu link directo
				$perfil = ProfilesModulos::where('modulos_id','=', $key->modulos_id)->where('profiles_id','=',Auth::user()->profiles_id)->first();


				if($perfil->listar != 0)
				{

					$link = Modulos::find($key->modulos_id);

					$print .=   '<li>
								<a href="'.$link->modulo.'" class="dropdown-toggle" ><i class="fa '.$key->icon.'"></i>'.$key->nombre.'</a>        
								</li>';
				}
			
			}
			else
			{
				//tiene submenu
				$sub 		= SubMenu::where('menu_id','=',$key->id)->get();	
				$subData 	=	null; 

				//recorre los submenu x menu_id
				foreach ($sub as $keysub => $valuesub ) 
				{
					
					//valida el modulo asiganado al sub menu con el permiso que tiene el usuario
					$perfilSub = ProfilesModulos::where('modulos_id','=', $valuesub->modulos_id)->where('profiles_id','=',Auth::user()->profiles_id)->first();
					
					if($perfilSub->listar != 0)
					{
						$subData .= '<li><a href="'.$valuesub->modulo->modulo.'">'.$valuesub->nombre.'</a></li>';
					}
					
				}
			
				if($subData != "")
				{
					$print .='	<li class="dropdown show-on-hover">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">'.$key->nombre.'</a>
								<ul class="dropdown-menu">
								'.$subData.'
								</ul>
								</li>';
				}
					
			}

		}

		return $print;
		}

}

?>