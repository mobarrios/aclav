<style type="text/css">
.tabla
{
  width: 9 cm;  
  height: 5 cm;
}
.foto
{
  width: 4 cm;  
  height: 4 cm;
}
</style>

<table class="tabla" bgcolor="#e6e7e9" cellspacing="0" cellpadding="0" style="border: 0px solid black">
     
    <tr>
    <td valign="top">

      <table width="100%" cellspacing="0" cellpadding="3" style="border: 1px solid white">
        <tr>
          <td width="67%" bgcolor="#ffffff">
            <img src="assets/estilosweb/carnet/cabeza.png" width="249" height="49" />
          </td>
          <td align="center" bgcolor="#ffffff" style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; font-weight: bold; color: #1C395E">Temporada:
            <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
              <tr>
                <td bgcolor="#e6e7e9"><center>{{$temporada}}</center></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

    <img src="assets/estilosweb/carnet/linea.png" width="100%" height="1%" />

    <table width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse";>
      <tr>
        <td width="60%" style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; color: #1C395E"> Apellido y Nombres
          <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
            <tr>
              <td height="15">{{$jugador->apellido}} , {{$jugador->nombre}}</td>
            </tr>
          </table>
        </td>
        <td rowspan="4" valign="bottom">
          <table  class="foto" border="0">
            <tr>
              <td bgcolor="#FFFFFF">  
                 @if($jugador->foto != '')
                    <img  class="foto" src="../public/uploads/jugadores/{{$jugador->foto}}" >
                @else
                    <img  class="foto" src="../public/assets/estilosweb/carnet/logo_carnet.jpg" >
                @endif

              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; color: #1C395E">Documento. Tipo / Número
          <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
            <tr>
              <td height="15">{{$jugador->dni}}</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; color: #1C395E">Fecha de Nacimiento
          <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
            <tr>
              <td height="15">{{$jugador->fecha_nacimiento}}</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; color: #1C395E">Club
          <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
            <tr>
              <td height="15">{{$club}}</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; color: #1C395E">N° Camiseta / Función
          <table cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" border="0">
            <tr>
              <td height="15">{{$nro}}</td>
            </tr>
          </table>
        </td>
        <td align="center" style="font-family: Tahoma, Geneva, sans-serif; font-size: 9px; font-weight: bold; color: #1C395E"><img src="assets/estilosweb/carnet/web.png" width="100" height="15" />
        </td>
      </tr>
    </table>    
  </tr>
</table>
