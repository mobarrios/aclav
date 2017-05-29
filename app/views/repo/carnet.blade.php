<table bgcolor="#ffffff" height="207.874016px" width="360" cellspacing="1" cellpadding="1" style="border: 1px solid black">
  <tr>
    <td valign="top"><table width="100%" cellspacing="1" cellpadding="5" style="border: 1px solid white">
      <tr>
        <td  align="center"><img src="../public/assets/estilosweb/images/logo_vs_menu_carnet.png" width="350" height="50" /></td>
      </tr>
    </table>

    <table width="100%" cellspacing="1" cellpadding="5">
      <tr>
        <td width="60%" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #000;"><p>Apellido : {{$jugador->apellido}}
       </p> </td>
        <td rowspan="4">
          <table bgcolor="#ffffff" height="100%" width="100%" border="0">
            <img src="../public/uploads/jugadores/{{$jugador->foto}}" width="152 px" height="152 px">
          </table>
        </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #000;"><p>Nombre : {{$jugador->nombre}}
        </p></td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #000;"><p>DNI : {{$jugador->dni}}
       </p> </td>
      </tr>
      <tr>
        <td style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #000;"><p>Fecha Nac. : {{$jugador->fecha_nacimiento}}
        </p></td>
      </tr>
    </table>

    <table bgcolor="#FF4252" width="100%" cellspacing="1" cellpadding="5" style="border: 1px solid white">
      <tr>
        <td align="center" style="font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #000000;">Temporada.</td>
      </tr>
    </table>    
  </tr>
</table>