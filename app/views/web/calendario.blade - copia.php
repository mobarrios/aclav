@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
<h4 class="media-heading"><font color="#ff4f5e">Calendario</font></h4>
<h4>{{$torneo->nombre_torneo}}</h4>
                   

 <div class="table-responsive">
   <table class="table table-hover table-striped" border="1" bordercolor="#dddddd">  
  <tbody>
    <tr>
      
    </tr>
  </tbody>
</table>
<table class="table-responsive"  border="1" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
  <tbody>
    <tr>
      <td><table class="table-responsive" border="0" cellpadding="2" cellspacing="1" bgcolor="#dddddd" >
        <tbody>
          <tr bgcolor="#dddddd">
            <td width="41" align="center">NRO.</td>
            <td width="55" align="center">FECHA</td>
            <td width="48" align="center">HORA</td>
            <td width="151"> LOCAL</td>
            <td width="139"> VISITANTE</td>
            <td width="148">ESTADIO</td>
            <td width="97">ÁRBITRO</td>
            <td width="91">ÁRBITRO 2 </td>
            <td width="50" align="center" bgcolor="#dddddd">TV</td>
          </tr>

            @foreach($torneo_fase as $fase)

              @foreach($fase->leg as $legs)

                  @foreach($legs->partido as $partido)

                      <tr bgcolor="#ffffff">
                      <td align="center" height="23">{{$partido->numero_partido}}</td>
                      <td align="center">{{$partido->fecha_inicio}}</td>
                      <td align="center">{{$partido->hora}}</td>
                      <td><strong>{{$partido->local_equipo_id->sigla }}</strong></td>
                      <td><strong>{{$partido->visita_equipo_id->sigla }}</strong></td>
                      <td>{{isset($partido->estadio_id->nombre) ? $partido->estadio_id->nombre : '' }}</td>
                      <td>{{isset($partido->Arbitro1->id) ? $partido->Arbitro1->apellido. &nbsp;&nbsp;$partido->Arbitro1->nombre : '' }}</td>
                      <td>{{isset($partido->Arbitro2->id) ? $partido->Arbitro2->apellido. &nbsp;&nbsp;$partido->Arbitro2->nombre : '' }}</td>
                      <td align="center"> - </td>
                      </tr>

                  @endforeach

              @endforeach

            @endforeach
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
                    </div>
               
            </div>
       
  </div>
</figure>
                   

  

                
      @endsection        
                        

                