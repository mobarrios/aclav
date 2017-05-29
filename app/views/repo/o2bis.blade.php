<html>

<style type="text/css">
table {
  	/*border: 1px solid black ;
  	border-collapse: collapse;
    */
}

.invisible {
  /*
  	border: none;
  	border-collapse: collapse;
    */
}

body 
{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:10pt;
}

</style>
<body>

<table width="100%" cellspacing="1" cellpadding="5" style="border: 1px solid black">
  <tr>
    <td width="30%" style="border-right:1px solid black;">
      <center><img src="../public/assets/estilosweb/images/logo_final_aclav.png" width="300" height="70"></center>
    </td>
    <td width="30%">
        <p style="font-family: Tahoma, sans-serif; font-size: 14px; font-weight: bold;">ASOCIACI&Oacute;N DE CLUBES<br>LIGA ARGENTINA DE VOLEY</p>
        <table>
          <tr>
            <td  align="center" bgcolor="#000000" style="color: #FFF; font-weight: bold; font-size: 11pt;">O-2bis</td>
            <td  align="center">COMPOSICI&Oacute;N DE LA DELEGACI&Oacute;N</td>
          </tr>
        </table>

    </td>
    <td width="30%">
      <img src="../public/assets/estilosweb/images/feva.png" width="150" height="70">
    </td>
  </tr>
</table>

<br>


<table width="100%" cellspacing="0" cellpadding="3">
  <tr>
    <td width="6%">
    Torneo :   
    </td>
    <td width="95%" style="border: 1px solid black">
      <font size="3">{{$torneo->nombre_torneo}}</font>
    </td>
  </tr>
</table>

<br>

<table width="100%" cellspacing="0" cellpadding="3" > 
  <tr>
    <td width="6%">
      Institución:   
    </td>
    <td width="25%" style="border: 1px solid black">
    <font size="3">{{$equipo->nombre}}</font>
    </td>

    <td width="5%">
      Rival:   
    </td>
    <td width="25%" style="border: 1px solid black">
     <font size="3">
      @if($equipo->id == $partido->local_equipo_id->id)
        
         {{$partido->visita_equipo_id->nombre}}
      
      @elseif($equipo->id == $partido->visita_equipo_id->id)
          
           {{$partido->local_equipo_id->nombre}}

      @endif
    </font>


    </td>

    <td width="5%">
      Partido Nro.:   
    </td>
    <td width="5%" style="border: 1px solid black">
     <font size="3"> {{$partido->numero_partido}}</font>
    </td>

    <td width="5%">
      Fecha:   
    </td>
    <td width="10%" style="border: 1px solid black">
     <font size="3">{{$partido->fecha_inicio}}</font>
    </td>
  </tr>
</table>

<br>
<br>


<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">Nro.</td>
     <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">Juv.</td>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">C/L</td>
    <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">Apellido</td>
    <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">Nombre</td>
    <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">F.Nac.</td>
    <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-weight: bold;">Documento</td>    
  </tr>


  @foreach($lista as $listas)
 
 <tr>
    @if($listas->BuenaFe->Jugador->id != 0)
    
        <td align="center"><font size="3">{{$listas->BuenaFe->nro}}</font></td>
        <td align="center"> 
        @if($listas->BuenaFe->Jugador->Pais->nombre == 'Argentina')
              @if( (date('Y',strtotime($temporada->fecha_inicio))) - (date("Y",strtotime($listas->BuenaFe->Jugador->fecha_nacimiento))) <= 21 )  
                  Si
              @else
                  No
              @endif      
          @else
          No
          @endif    </td>
        <td align="center"></td>
        <td align="center"><font size="3">{{$listas->BuenaFe->Jugador->apellido}}</font></td>
        <td align="center"><font size="3">{{$listas->BuenaFe->Jugador->nombre}}</font></td>
        <td align="center"><font size="3">{{$listas->BuenaFe->Jugador->fecha_nacimiento}}</font></td>
        <td align="center"><font size="3">{{$listas->BuenaFe->Jugador->dni}}</font></td>   
    
    @else
        <td align="center" ></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>   
    

    @endif
      </tr> 
     
  @endforeach
  
</table>

<br>
<br>

<table width="100%" border="0">
  <tr>
    <td width="70%">
      <span style="font-weight: bold">OFICIALES DE DELEGACI&Oacute;N</span>
     
      <table width="100%" border="1" cellspacing="1" cellpadding="5" >

        <tr>
          <td width="30%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">    Funcion
          </td>
          <td width="70%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">    Apellido Nombre
          </td>
        </tr>
<font size="3">
        @foreach($listaStaff  as $lista)
</font>
          <tr><font size="3">
              @if($lista->BuenaFeStaff->Oficial->id != 0)
</font>
              <td align="center"><font size="3">{{$lista->BuenaFeStaff->Funcion->funcion}}</font></td>
              <td align="center"><font size="3">{{$lista->BuenaFeStaff->Oficial->full_name}}</font></td>
             
              @else
              <td align="center" ></td>
              <td></td>
              @endif
          </tr> 

        @endforeach
  
        
      </table>

    </td>

    <td align="center" width="30%"><table class="invisible" width="70%" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">Firma del Manager</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
       <td bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">Firma del Entrenador en Jefe</td>
      </tr>
      </table>
    </td>
  </tr>
</table>


</body>
</html>