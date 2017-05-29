<?php

	class Lugar
	{
		public static function getPais()
		{
			$pais = Pais::orderBy('nombre','ASC')->get();

			return $pais;
		}
		public static function getProvincia()
		{
			$provincia = Provincia::orderBy('provincia_nueva_nombre','ASC')->lists('provincia_nueva_nombre','id');
			
			return $provincia;
		}
		public static function getCiudad()
		{
			$ciudad = Ciudad::orderBy('ciudad_nueva_nombre','ASC')->lists('ciudad_nueva_nombre','id');

			return $ciudad;
		}

	}

?>