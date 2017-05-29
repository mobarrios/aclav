<?php

class MenuItem extends Eloquent
{
	
	protected $table	= 	'menu_item';


	public static function crearMenu()
	{
		$user 		= 	Auth::user()->profiles_id;
		$profiles 	=	ProfilesModulos::where('profiles_id','=',$user)->get();		
		$menu 		=	MenuItem::all();

		$print		= null;


		foreach($menu as $menus)
		{
	
			$p = ProfilesModulos::where('modulos_id','=', $menus->modulo_id)->where('profiles_id','=',Auth::user()->profiles_id)->get();

			foreach($p as $a)
			{

				if($a->listar == 1)
				{
					if($menus->is_main)
					{
						$print .= '<li class="dropdown show-on-hover">
									<a data-toggle="dropdown" href="#"><span>{{$menu->nombre}}</span></a>
									<ul class="dropdown-menu">                

									<li><a href="{{$sub->modulo_id}}"><span>{{ $sub->nombre}}</span></a></li>

									</ul>     

									</li>';
					}else{
						$print .= '<li><a href="'.$menus->nombre.'"><span>'.$menus->nombre.'</span></a></li>';
					}
					


				
					
				}
			}

			//if($menus->is_main)
			//{
			/*
			if($menus->is_main == 1 )
			{

				if($menus->modulo_id == 0)
				{
					$print .=  '<li class="dropdown show-on-hover">
          						<a data-toggle="dropdown" href="'.$menus->modulo_id.'"><span>'.$menus->nombre.'</span></a>';

          						$sub = MenuItem::where('id','=',$menus->id)->get();

								 foreach($sub as $id => $key)
								 {
								 	echo  $key;
								 }         

									$print .= '<li><a href="'.$sub->modulo_id.'"><span>'.$sub->nombre.'</span></a></li>';

	



          			$print .=	'</li>';

				}
				else
				{
					$print .=  '<li">
					<a href="'.$menus->modulo_id.'"><span>'.$menus->nombre.'</span></a>
					</li>';

				}


			}	*/
				
			
				//$print .=	'<li class="dropdown show-on-hover">
				//				<a href='.$menus->modulo_id.' data-toggle="dropdown" ><i class="fa '. $menus->icon.' "></i>  <span>'.$menus->nombre.'</span></a>
				//			</li>';

			//}else{


			//	if($p->listar == 1 )
			//	{
					//return  $menus->nombre;
			//		$print .= $menus->nombre;
			//	}

			//}

			

		}


		return $print;	
		


	}


}

?>