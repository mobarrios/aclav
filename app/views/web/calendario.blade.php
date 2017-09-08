@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
    <h4 class="media-heading"><p><font size="5" color="#f2293a">Calendario</font></p></h4><br>
<h4 class="media-heading"><p><font size="5" color="#f2293a">{{$torneo->nombre_torneo}}</font></p></h4><br>



 
@foreach($fases as $fase )

<h3><p><font size="3" color="#000000" >{{$fase->nombre}}</font></p></h3>

<div class="tabsect">
      
      <ul class="nav nav-tabs" id="newTab">
       @foreach($fase->leg as $leg)

                @if(strtotime(date('Y-m-d')) >= strtotime($leg->fecha_inicio) && strtotime(date('Y-m-d')) <= strtotime($leg->fecha_final))

                    <li class="active"><a href="#{{$leg->id}}" data-toggle="tab"><font size="-2">{{$leg->nombre}}</font></a></li>
                    
                  @else
                    <li ><a href="#{{$leg->id}}" data-toggle="tab"><font size="-2">{{$leg->nombre}}</font></a></li>
                  
                  @endif

      @endforeach

      </ul>

      <div class="tab-content">      
        @foreach($fase->leg as $leg)
 
                    @if(strtotime(date('Y-m-d')) >= strtotime($leg->fecha_inicio) && strtotime(date('Y-m-d')) <= strtotime($leg->fecha_final))

                       <div class="tab-pane active" id="{{$leg->id}}">
             
                     @else   
                       <div class="tab-pane" id="{{$leg->id}}">
            
                     @endif

               

                  <div class="table-responsive">
                      <table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
                        <tbody>
                          <tr>
                          <td width="12" align="center" class="info"><font size="2">Nº</font></td>
                          <td width="30" align="center" class="info"><font size="2">Dia</font></td>
                          <td width="90" align="center" class="info"><font size="2">Fecha</font></td>
                          <td align="center" width="90" class="info"><font size="2">Hora</font></td>
                          <td width="200" align="center" class="info"><font size="2">Local</font></td>
                          <td width="200" align="center" class="info"><font size="2">Visitante</font></td>
                          <td width="200" align="center" class="info"><font size="2">Estadio</font></td>
                          <td width="40" align="center" class="info"><font size="2">Tv</font></td>
                          </tr>

                              @foreach($leg->partidoCalendario as $partido)
                              
                               <tr>
                                @if($partido->condicional == true)

                                  <?php  $condicional = 1;?>
                                  <td align="center"  height="20" style='background-color:#f5e6e6;' ><strong>{{$partido->numero_partido}}</strong></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">{{$partido->dia}}</font></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">{{$partido->fecha_inicio}}</font></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">{{$partido->hora}}</font></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">
                                  
                                  @if($partido->local_text == '')
                                    {{$partido->local_equipo_id->nombre }} 
                                  @else
                                    {{$partido->local_text}}    
                                  @endif

                               
                                  </font></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">

                                  @if($partido->visita_text == '')
                                     {{$partido->visita_equipo_id->nombre }}
                                  @else
                                    {{$partido->visita_text}}    
                                  @endif
                                  </font></td>
                                  <td align="center" style='background-color:#f5e6e6;'><font size="2">{{isset($partido->Estadio->nombre) ? $partido->Estadio->nombre : '' }}</font>
                                  </td>
                                  @if($partido->televisado == 2)
                                     <td align="center" style='background-color:#f5e6e6;'><img src="assets/estilosweb/images/t_logo.png" border="0" height="13" width="40" /></td>
                                  @elseif($partido->televisado == 1)
                                     <td align="center" style='background-color:#f5e6e6;'><img src="assets/estilosweb/images/tycsports_play.png" border="0" height="13" width="40" /></td>

                                  @else

                                    <td align="center" style='background-color:#f5e6e6;'></td>
                                  @endif
                                
                                @else
                              
                                <td align="center"  height="20" bgcolor="#eff0f2"><strong>{{$partido->numero_partido}}</strong></td>
                                <td align="center" bgcolor="#ffffff"><font size="2">{{($partido->fecha_inicio == 'a Confirmar' ?  '': $partido->dia) }}</font></td>
                                <td align="center" bgcolor="#ffffff"><font size="2">{{$partido->fecha_inicio}}</font></td>
                                <td align="center"bgcolor="#eff0f2"><font size="2">{{$partido->hora}}</font></td>
                                <td align="center" bgcolor="#ffffff"><font size="2">
                                @if($partido->local_text == '')
                                  {{$partido->local_equipo_id->nombre }} 
                                @else
                                  {{$partido->local_text}}    
                                @endif
                                </font></td>
                                <td align="center" bgcolor="#eff0f2"><font size="2">
                              @if($partido->visita_text == '')
                                   {{$partido->visita_equipo_id->nombre }}
                                @else
                                  {{$partido->visita_text}}    
                                @endif

                               </font></td>
                                <td align="center" bgcolor="#ffffff"><font size="2">{{isset($partido->Estadio->nombre) ? $partido->Estadio->nombre : '' }}</font>
                                </td>
                                @if($partido->televisado == 2)
                                   <td align="center" bgcolor="#eff0f2"><img src="assets/estilosweb/images/t_logo.png" border="0" height="13" width="40" /></td>
                                @elseif($partido->televisado == 1)
                                   <td align="center" bgcolor="#eff0f2"><img src="assets/estilosweb/images/tycsports_play.png" border="0" height="13" width="40" /></td>

                                @else

                                  <td align="center" bgcolor="#eff0f2"></td>
                                @endif
                                </tr>

                               @endif 
                               @endforeach
                         </tbody>
                      </table>

                    </div> 

                  </div>  
       
     

        @endforeach

      </div>

</div>


@endforeach

@if(isset($condicional))
    <div  style="width: 5%; background-color:#f5e6e6; height: 20px; "></div>Partido  Condicional
@endif


</div>

</div>



 @endsection 