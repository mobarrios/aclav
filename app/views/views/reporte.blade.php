<!DOCTYPE html>
<html class="no-js">

<head>
 
<style type="text/css">
	
	.encabezado
	{
		background-color: grey;
	}

	table
	{
		border: solid 1px, color:black ;
	}

</style>



<div class="encabezado">
	<img src="assets/estilosweb/images/logo_vs2.png" ></td>
</div>

<table class="table">
	<thead>
		<tr>
			<th>DNI</th>
			<th>Jugador</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $datas)
		<tr>
			<td><img src="uploads/jugadores/{{$datas->foto}}" width="100"></td>
			<td>{{$datas->dni}}</td>
			<td>{{$datas->nombre}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

