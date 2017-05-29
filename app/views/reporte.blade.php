<html>
<head>
<style type="text/css">
	
	body{
		font-size: 12px;
	}
	.encabezado
	{
		background-color: grey;
	}

	table
	{
		border: solid 1px, color:black ;
	}

</style>

<body>

<div class="encabezado">
	<img src="assets/estilosweb/images/logo_vs2.png" >
</div>
		

<table width="100%">
<thead>
<tr>
	<th>Dni</th>
	<th>Apellido Nombre</th>
	<th>F. Nac.</th>
	<th>Nacionalidad</th>
	<th>Club Origen | 
	Posición</th>

</tr>
</thead>
<tbody>
		
	@foreach($data as $datas)
	<tr>
		<td>{{$datas->dni}}</td> 
		<td>{{$datas->apellido}}, {{$datas->nombre}}</td>
		<td>{{$datas->fecha_nacimiento}}</td>
		<td>{{$datas->Pais->nombre}}</td>
		<td>{{$datas->club_origen}} | 
		{{$datas->Posicion($datas->posicion)}}</td>
	</tr>
		@endforeach
</tbody>		
</table>			

</body>

