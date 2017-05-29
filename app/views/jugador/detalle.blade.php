
<div class="col-sm-3">
	<img class="avatar avatar-lg img-thumbnail" src="uploads/jugadores/{{$jugador->foto}}"></img>
</div>	
<div class="col-sm-9">
<h2>{{$jugador->apellido}} {{$jugador->nombre}}</h2>

	<li>Sexo:     <strong> {{$jugador->sexo}} </strong> </li>
	<li>Fecha Nacimiento:    <strong> {{$jugador->fecha_nacimiento}} </strong> </li>
	<li>DNI/Pasaporte:    <strong> {{$jugador->dni}} </strong> </li>
	<li>Pais:    <strong> {{$jugador->Pais->nombre}} </strong> </li>
  	<li>Altura:    <strong> {{$jugador->altura}} cm</strong> </li>
	<li>Peso:    <strong> {{$jugador->peso}} Kg</strong> </li>
	<li>Alcance/Ataque:    <strong> {{$jugador->alcance_ataque}} cm</strong> </li>
	<li>Alcance/Bloqueo:    <strong> {{$jugador->alcance_bloqueo}} cm</strong> </li>
	<li>Posición:    <strong> {{$jugador->Posicion($jugador->posicion)}} </strong> </li>
	<li>Club Origen    <strong> {{$jugador->club_origen}} </strong> </li>

	<a href="jugador/edit/{{Crypt::encrypt($jugador->id)}}" class="btn btn-success btn-xs">Editar</a>
</div>