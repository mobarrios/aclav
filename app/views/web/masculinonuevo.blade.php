@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                           

                        <div class="media">

                         
                        <h4 class="media-heading"><p><font size="5" color="#f2293a">{{$models->nombre}}</font></p></h4>
                            <div class="media-body"><address>
                              <img style="float: left; margin-right:10px" src="uploads/escudos/{{$models->escudo}}"  width="150"  class="thumbnail">
                              <strong><font size="3" color="#000000">Sigla ACLAV: </strong>{{$models->sigla}}</font><br><br>
                              <strong><font size="3" color="#000000">Historia de la Institución: </strong>{{$models->historia}}</font></p>
                              <br><br><br>
<center>


<br><br>
<div class="table-responsive">
<table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
  <tr>
    <td colspan="9"><center><button type="button" class="btn btn-primary btn-xs backcolor">Jugadores</button></center></td>
  </tr>
  <tr>
    <td class="info"><center><p><font size="2" color="#000000">Imagen</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">N° Camiseta</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Apelldio Nombre</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Posición</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Fecha Nac.</font></p></font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Altura</font></p></center></td>

  </tr>


@foreach($jugadores_actuales as $v)
  
    <tr>
                <!-- falta validar si no tiene dato-->
                <td>

                <center><p>
                <img src="uploads/jugadores/{{$v['jugador_id']['foto']}}" class="img-circle" width="50" height="50"></p>
                </center></td>
                <td><center><p><font size="2">{{$v['buena_fe']['nro']}}</font></p> </center></td>
                <td><center><p><font size="2"> 
                <a href="web/masculino/detalle/{{$v['jugador_id']['id']}}">{{$v['jugador_id']['apellido']}} {{$v['jugador_id']['nombre']}}</a> </font></p>

                  @if($v['buena_fe']['fecha_desde']!= '0000-00-00')
                    <p>desde {{$v['buena_fe']['fecha_desde']}}</p>
                  @endif
                </center>
                </td>
                <td><center><p><font size="2">{{$v['jugador_id']->Posicion($v['jugador_id']->posicion)}}</font></p></center></td>
                <td><center><p><font size="2">{{$v['jugador_id']['fecha_nacimiento']}}</font></p></center></td>
                <td><center><p><font size="2">{{$v['jugador_id']['altura']}}</font></p></center></td>  
                </tr>
    <tr>
    
@endforeach


  
</table>
</div>
<br>
<div class="table-responsive">
<table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
  <tr>
    <td colspan="9"><center><button type="button" class="btn btn-primary btn-xs backcolor">Jugadores dados de Baja</button></center></td>
  </tr>
  <tr>
    <td class="info"><center><p><font size="2" color="#000000">Imagen</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">N° Camiseta</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Apelldio Nombre</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Posición</font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Fecha Nac.</font></p></font></p></center></td>
    <td class="info"><center><p><font size="2" color="#000000">Altura</font></p></center></td>    
    
  </tr>

  @foreach($jugadores_baja as $ex_jugador)
        <tr>
          <td>

              <center><p><img src="uploads/jugadores/{{$ex_jugador['jugador_id']['foto']}}" class="img-circle" width="50" height="50"></p></center>
          </td>
          <td>
            <center><p><font size="2">{{$ex_jugador['buena_fe']['nro']}}</font></p> </center>
          </td>
          <td>
          <center><p><font size="2">
          <a href="web/masculino/detalle/{{$ex_jugador['jugador_id']['id']}}">{{$ex_jugador['jugador_id']['apellido']}} {{$ex_jugador['jugador_id']['nombre']}}</a></font></p>
           
            @if($v['buena_fe']['hasta'] != '0000-00-00')
                    <p>hasta {{$v['buena_fe']['hasta']}}</p>
            @endif
           
           </center>
          </td>
          <td><center><p><font size="2">{{$v['jugador_id']->Posicion($v['jugador_id']->posicion)}}</font></p></center></td>
          <td><center><p><font size="2">{{$ex_jugador['jugador_id']['fecha_nacimiento']}}</font></p></center></td>
          <td><center><p><font size="2">{{$ex_jugador['jugador_id']['altura']}}</font></p></center></td>
        
          </tr>
        <tr>
        
  @endforeach

</table>
</div>
<br>
<div class="table-responsive">
<table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
  <tr>
    <td colspan="3">
      <center><button type="button" class="btn btn-primary btn-xs backcolor">Staff del Equipo</button></center>
    </td>
  </tr>
  <tr>
    <td class="info"><center><p><font size="2" color="#000000">Imagen</font></p></center></td>
  
    <td class="info">
        <center><p><font size="2" color="#000000">Apellido Nombre</font></p></center>
    </td>
    <td class="info">
        <center><p><font size="2" color="#000000">Función</font></p></center>
    </td>
  </tr>
  
  @foreach($staffs_actuales as $staff)
   
              <tr>
                <td>
                    <center><p><img src="uploads/oficial/{{$staff['staff_id']['imagen']}}" class="img-circle" width="50" height="50"></p></center>
                </td>
                <td>
                  <center><p><font size="2">
                    <a href="web/staffdetalle/{{$staff['staff_id']['id']}}">{{$staff['staff_id']['apellido']}} {{$staff['staff_id']['nombre']}}</a></font></p>
                    @if($staff['buena_fe_staff']['fecha_desde'] != '0000-00-00')
                        <p>desde {{$staff['buena_fe_staff']['fecha_desde']}}</p>
                    @endif
                  </center>
                </td>
                <td>
                  <center><p><font size="2">{{$staff['buena_fe_staff']['funcion']->funcion}}</font></p></center>
                </td>
              </tr>
          
  @endforeach
 
</table>
</div>
<br>
<div class="table-responsive">
<table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
    <tr>
      <td colspan="3">
        <center><button type="button" class="btn btn-primary btn-xs backcolor">Staff dados de baja</button></center>
      </td>
    </tr>
    <tr>
    <td class="info"><center><p><font size="2" color="#000000">Imagen</font></p></center></td>
    <td class="info">
        <center><p><font size="2" color="#000000">Apellido Nombre</font></p></center>
    </td>
    <td class="info">
        <center><p><font size="2" color="#000000">Función</font></p></center>
    </td>
  </tr>


  @foreach($staffs_baja as $ex_staff)
          <tr>
            <td>
                <center><p><img src="uploads/oficial/{{$ex_staff['staff_id']['imagen']}}" class="img-circle" width="50" height="50"></p></center>
            </td>
              <td>
                <center><p><font size="2">
                  <a href="web/staffdetalle/{{$ex_staff['staff_id']['id']}}">{{$ex_staff['staff_id']['apellido']}} {{$ex_staff['staff_id']['nombre']}}</a></font></p>

                  @if($ex_staff['buena_fe_staff']['fecha_hasta'] != '0000-00-00')
                        <p>hasta {{$ex_staff['buena_fe_staff']['fecha_hasta']}}</p>
                  @endif
                 
                </center>
              </td>
              <td>
                <center><p><font size="2">{{$ex_staff['buena_fe_staff']['funcion']->funcion}}</font></p></center>
              </td>
          </tr>
      
  @endforeach
 
</table>
</div>
</center>
                                
                            </div>

                        </div>

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                   

                