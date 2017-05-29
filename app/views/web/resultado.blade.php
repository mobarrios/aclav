@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
    <h4 class="media-heading"><p><font size="5" color="#f2293a">Resultados</font></p></h4><br>
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
                      <td width="10" align="center" class="info">N°</td>
                      <td width="80" align="center" class="info">Fecha</td>
                      <td align="center" width="200" class="info">Local</td>
                      <td align="center" width="200" class="info">Visitante</td>
                      <td width="20" align="center" class="info">Res.</td>
                      <td width="50" align="center" class="info">Set 1</td>
                      <td width="50" align="center" class="info">Set 2</td>
                      <td width="50" align="center" class="info">Set 3</td>
                      <td width="50" align="center" class="info">Set 4</td>
                      <td width="50" align="center" class="info">Set 5</td>
                      <td width="20" align="center" class="info">Reporte</td>
                      </tr>

                      @foreach($leg->partidoResultados as $partido)

                        <tr >
                        <td align="center"  height="20" bgcolor="#eff0f2"><font size="2"><strong>{{$partido->numero_partido}}</strong></font></td>
                        <td align="center" bgcolor="#ffffff"><font size="2">{{$partido->fecha_inicio}}</font></td>
                        <td align="center"bgcolor="#eff0f2"><font size="2"><strong>{{$partido->local_equipo_id->nombre }}</strong></font></td>
                        <td align="center" bgcolor="#ffffff"><font size="2"><strong>{{$partido->visita_equipo_id->nombre }}</strong></font></td>
                        <td align="center" bgcolor="#eff0f2"><font size="2"><strong>{{$partido->local_set }}-{{$partido->visita_set }}</strong></font></td>
                        
                        @foreach($partido->puntoPartido as $punto)

                             <td align="center" bgcolor="#eff0f2">
                               <font size="2">
                                 {{$punto->puntos_local}} - {{$punto->puntos_visita}}
                               </font>
                             </td>
                             
                        @endforeach
 
                        <td align="center" bgcolor="#eff0f2">
                        @if($partido->reporte)
                        <a href="uploads/partidos/reportes/{{$partido->reporte}}" target="_blank">
                        <img src="assets/estilosweb/images/pdf.gif" border="0" height="16" width="16" /> 
                        </a>
                        @endif
                       
                         </td>
                        </tr>

                       @endforeach
                       </tbody>
                      </table>
<br><br>
                    </div> 
                  </div>  

        @endforeach

      </div>
</div>
@endforeach



</div>

</div>



 @endsection 