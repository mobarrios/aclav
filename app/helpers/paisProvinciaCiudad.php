<?php

	class PaisProvinciaCiudad
	{
		public static function getPais()
		{
			$pais = Pais::orderBy('nombre','ASC')->get();

			return $pais;
		}
		public static function getProvincia($pais_id = null)
		{
			$provincia = Provincia::where('pais_id','=',$pais_id)->orderBy('provincia_nueva_nombre','ASC')->get();
			return $provincia;
		}
		public static function getCiudad($provincia_id = null)
		{
			$ciudad = Ciudad::where('provincia_nueva_id','=',$provincia_id)->orderBy('ciudad_nueva_nombre','ASC')->get();
			return $ciudad;
		}

	}

?>