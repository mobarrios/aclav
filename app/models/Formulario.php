<?php

class Formulario extends Eloquent
{
	protected $table = 'formulario';
	protected $fillable = array('nombre','file','is_formulario');

	public function Estado($equipo_id ,$formulario_id )
	{
		$estado = FormularioEquipo::where('equipo_id','=',$equipo_id)->where('formulario_id','=',$formulario_id)->first();

		return $estado;
	}


}

?>