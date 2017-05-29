<div  style=" padding:5px ;background-color:#143965;">
	<img src="http://aclav.com/assets/estilosweb/images/logo_vs_menu.png"  alt="Image">
</div>

<h4>Tiene una designación.</h4>

<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Torneo</td>
			<td><strong>{{$torneo->nombre_torneo}}</strong></td>
		</tr>
		<tr>
			<td>Serie</td>
			<td><strong>{{$torneo->serie_id}}</strong></td>
		</tr>
		<tr>
			<td>Partido nro.</td>
			<td><strong>{{$partido->numero_partido}}</strong></td>
		</tr>
		<tr>
			<td>Dia</td>
			<td><strong>{{$partido->Dia}}</strong></td>
		</tr>
		<tr>
			<td>Fecha</td>
			<td><strong>{{$partido->fecha_inicio}}</strong></td>
		</tr>
		<tr>
			<td>Hora</td>
			<td><strong>{{$partido->hora}}</td>
		</tr>
		<tr>
			<td>Equipo Local</td>
			<td><strong>{{$partido->local_equipo_id->nombre}}</strong></td>
		</tr>
		<tr>
			<td>Equipo Visitante</td>
			<td><strong>{{$partido->visita_equipo_id->nombre}}</strong></td>
		</tr>
		<tr>
			<td>Estadio</td>
			<td><strong>{{$partido->Estadio->nombre}}</strong></td>
		</tr>
	</tbody>
</table>

<br>
Ingrese a intranet para aceptar/rechazar su designación.
<br>
<a href="http://www.aclav.com/home">www.aclav.com/home</a>

