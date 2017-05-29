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

.Rotate-90
{
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;  
}

</style>
<body>

<table width="100%" cellspacing="1" cellpadding="5" style="border: 1px solid black">
  <tr>
    <td width="30%" style="border-right:1px solid black;">
      <img src="../public/assets/estilosweb/images/logo_final_aclav.png">
    </td>
    <td width="30%">
        <p style="font-family: Tahoma, sans-serif; font-size: 14px; font-weight: bold;">ASOCIACI&Oacute;N DE CLUBES<br>LIGA ARGENTINA DE VOLEIBOL</p>
        <table>
          <tr>
            <td  align="center" bgcolor="#000000" style="color: #FFF; font-weight: bold; font-size: 11pt;">O-2</td>
            <td  align="center">REGISTRO DE EQUIPO</td>
          </tr>
        </table>

    </td>
    <td width="30%">
      <img src="../public/assets/estilosweb/images/feva.png">
    </td>
  </tr>
</table>

<br>


<table width="100%" cellspacing="0" cellpadding="3" > 
  <tr>
    <td width="6%">
      Institución:   
    </td>
    <td width="10%" style="border: 1px solid black">
      {{$equipo->nombre}}  
    </td>

    <td width="5%">
      Torneo:   
    </td>
    <td width="10%" style="border: 1px solid black">
    {{$torneo->nombre_torneo}}
    </td>
  </tr>
</table>
<br>


<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td width="4%" rowspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;"><div class="Rotate-90">N°. de Camiseta</div></td>
    <td width="3%" rowspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;"><div class="Rotate-90">Juvenil</div></td>
    <td width="3%" rowspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;"><div class="Rotate-90">Posición</div></td>
    <td colspan="5" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Datos del Jugador</td>
    <td colspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Alcances Máximos</td>
    <td width="15%" rowspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Club de Pertenencia</td>
    <td width="10%" rowspan="2" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Nacionalidad</td>    
  </tr>
  <tr>
    <td width="25%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Apellido y Nombres</td>
    <td width="10%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Fecha Nacimiento</td>
    <td width="10%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">N° de Documento</td>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Altura (cm)</td>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Peso (kg)</td>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Remate (cm)</td>
    <td width="5%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Bloqueo (cm)</td>
  </tr>
  @foreach($lista as $listas )

  @if( strtotime($listas->fecha_hasta) >= strtotime(date('d-m-Y'))|| $listas->fecha_hasta == 'actual' )
      @if(!$listas->borrado)
      <tr>
        @if($listas->jugador_id != 0)
        
            <td align="center">{{$listas->nro}}</td>
            <td align="center">

              @if($listas->jugador->Pais->nombre == 'Argentina')
                  @if( (date('Y',strtotime($temporada->fecha_inicio)))  - (date("Y",strtotime($listas->jugador->fecha_nacimiento))) <= 21 )  
                      Si
                  @else
                      No
                  @endif      
              @else
              No
              @endif    
            </td>
            <td align="center">{{$listas->jugador->posicion}}</td>
            <td align="center">{{$listas->jugador->apellido}} {{$listas->jugador->nombre}}</td>
            <td align="center">{{$listas->jugador->fecha_nacimiento}}</td>
            <td align="center">{{$listas->jugador->dni}}</td>
            <td align="center">{{$listas->jugador->altura}}</td>
            <td align="center">{{$listas->jugador->peso}}</td>
            <td align="center">{{$listas->jugador->alcance_ataque}}</td>
            <td align="center">{{$listas->jugador->alcance_bloqueo}}</td>
            <td align="center">{{$listas->jugador->club_origen}}</td>
            <td align="center">{{$listas->jugador->Pais->nombre}}</td>   
        
        @else
            <td align="center" >{{$listas->nro}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  

        @endif
       @endif 

      </tr>   
    @endif
  @endforeach
</table>

<p><br>
<span style="font-style: italic">En posición colocar: <span style="font-weight: bold">O:</span> Opuesto - <span style="font-weight: bold">L:</span> Líbero - <span style="font-weight: bold">A:</span> Armador - <span style="font-weight: bold">C:</span> Central - <span style="font-weight: bold">P/R:</span> Punta/Receptor</span></p>
<hr><p>&nbsp;</p>
<p>&nbsp; </p>
<table width="100%" border="1">
  <tr>
    <td width="75%">
      <p style="font-weight: bold">OFICIALES DEL EQUIPO</p>
      <table width="100%" border="1" cellspacing="0" cellpadding="5" >
        <tr>
          <td width="30%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Funcion</td>
          <td width="30%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Apellido Nombre</td>
          <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Fecha de Nacimiento</td>
          <td width="20%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">N° de Documento</td>
        </tr>
        
        @foreach($listaStaff as $staff)

         @if(!$staff->borrado)

            @if( $staff->fecha_hasta >= date('d-m-Y') )
              <tr>
              <td>{{ isset($staff->Funcion->id) ? $staff->Funcion->funcion: '' }}</td>
              <td>{{ isset($staff->Oficial->id) ? $staff->Oficial->full_name: '' }}</td>
              <td>{{ isset($staff->Oficial->id) ? $staff->Oficial->fecha_nacimiento: '' }}</td>
              <td>{{ isset($staff->Oficial->id) ? $staff->Oficial->dni: '' }}</td>        
              </tr>
           @endif
        
         @endif

        @endforeach

        
      </table>
      
    </td>

    <td valign="top" align="center" width="25%">
     <p style="font-weight: bold">&nbsp;</p>
    <table width="90%" border="1" cellspacing="0" cellpadding="5" >
      <tr>
        <td width="25%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Pieza</td>
        <td width="25%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Conjunto Claro</td>
        <td width="25%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Conjunto Oscuro</td>
        <td width="25%" align="center" bgcolor="#CCCCCC" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold;">Conjunto TV</td>
      </tr>
      <tr>
        <td align="center">Camiseta</td>
        <td align="center">{{$o2->uniforme_claro_camiseta}}</td>
        <td align="center">{{$o2->uniforme_oscuro_camiseta}}</td>
        <td align="center">{{$o2->uniforme_tv_camiseta}}</td>

      </tr>
      <tr>
        <td align="center">Short</td>
        <td align="center">{{$o2->uniforme_claro_short}}</td>
        <td align="center">{{$o2->uniforme_oscuro_short}}</td>
        <td align="center">{{$o2->uniforme_tv_short}}</td>
      </tr>
      </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td valign="bottom" align="center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    <table width="100%" border="1" cellspacing="0" cellpadding="5" valign="bottom">
      <tr>
        <td width="65%" rowspan="2"><span style="font-size: 9pt">ESTE FORMULARIO DEBE SER RECIBIDO POR ACLAV ANTES DEL:</span></td>
        <td width="35%">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">FECHA</td>
      </tr>
    </table></td>
  </tr>
</table>

<p>&nbsp;</p>


<p style="font-size: 9pt">Nosotros, los abajo firmantes, declaramos que, de acuerdo con las actuales regulaciones, los competidores registrados están calificados para competencias ACLAV.</p>
<table width="100%" border="0">
  <tr>
    <td width="25%" align="center"><table class="invisible" width="90%" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center" bgcolor="#CCCCCC" style="font-size: 9pt">Firma y Sello</td>
      </tr>
      <tr>
        <td align="center" style="font-size: 9pt">Secretario General</td>
      </tr>
    </table></td>
    <td width="25%" align="center"><table class="invisible" width="90%" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center" bgcolor="#CCCCCC" style="font-size: 9pt">Firma y Sello</td>
      </tr>
      <tr>
        <td align="center" style="font-size: 9pt">Presidente</td>
      </tr>
    </table></td>
    <td width="20%" align="center" style="font-size: 9pt; color: #666;">Sello<br>del<br>Club</td>
    <td width="20%" style="font-size: 8pt; font-style: italic; text-align: center;">Reservado para uso de ACLAV - No completar
      <table width="100%" border="1">
        <tr>
          <td><p>&nbsp;</p>
          <p style="text-align: center; color: #666; font-size: 12px;">Sello y Firma de aceptación ACLAV</p>
          <p>&nbsp;</p></td>
        </tr>
    </table></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>