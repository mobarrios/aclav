@foreach($resultados as $resultado)
  <!-- Comienzo de resultados pasados -->
  <div class="team-roster__item card_novivo card--no-paddings">
    <div class="card__content">
      <h5 class="widget-results__title">
      @if($resultado->hora == 'a Confirmar')
      <font size="1">
      @else
      <font size="2">
      @endif
      <p>{{$resultado->fecha_inicio}} | {{$resultado->hora}}</p></font></h5>              
      <div class="widget-results__content resultados">
            <div class="widget-results__team-logo">
                <center>
                  <div class="widget-results__team-details">
                  <h3><p>{{$resultado->local_set}}</p></h3>
                </div></center>                        
                <center><figure class="widget-results__team-logo">
                  <img src="uploads/escudos/{{$resultado->local_equipo_id->escudo}}" title="{{$resultado->local_equipo_id->nombre}}">
                </figure></center>
                <center><div class="widget-results__team-logo">
                  <h5 class="widget-results__team-name"><p>{{$resultado->local_equipo_id->sigla}}</p></h5>
                </div></center>
            </div>
            <div class="widget-results__result">
                <div class="widget-results__score">
                  <p><span class="team-leader__total">
                  @if($resultado->puntoPorSet(1)->puntos_local > $resultado->puntoPorSet(1)->puntos_visita )
                  <b>{{isset($resultado->puntoPorSet(1)->puntos_local)? $resultado->puntoPorSet(1)->puntos_local : '0'}} </b>
                  @else
                  {{isset($resultado->puntoPorSet(1)->puntos_local)? $resultado->puntoPorSet(1)->puntos_local : '0'}}
                  @endif
                  </span> - <span class="team-leader__total">
                  @if($resultado->puntoPorSet(1)->puntos_visita > $resultado->puntoPorSet(1)->puntos_local)
                  <b> {{isset($resultado->puntoPorSet(1)->puntos_visita)? $resultado->puntoPorSet(1)->puntos_visita : '0'}}
                  </b>
                  @else
                  {{isset($resultado->puntoPorSet(1)->puntos_visita)? $resultado->puntoPorSet(1)->puntos_visita : '0'}}
                  @endif                  
                  </span> </p>  
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">
                  @if($resultado->puntoPorSet(2)->puntos_local > $resultado->puntoPorSet(2)->puntos_visita)
                  <b> {{isset($resultado->puntoPorSet(2)->puntos_local)? $resultado->puntoPorSet(2)->puntos_local : '0'}}
                  </b>
                  @else
                  {{isset($resultado->puntoPorSet(2)->puntos_local)? $resultado->puntoPorSet(2)->puntos_local : '0'}}
                  @endif
                  </span> - <span class="team-leader__total">
                  @if($resultado->puntoPorSet(2)->puntos_visita > $resultado->puntoPorSet(2)->puntos_local)
                  <b>{{isset($resultado->puntoPorSet(2)->puntos_visita)? $resultado->puntoPorSet(2)->puntos_visita : '0'}}
                  </b>
                  @else
                  {{isset($resultado->puntoPorSet(2)->puntos_visita)? $resultado->puntoPorSet(2)->puntos_visita : '0'}}
                  @endif
                  </span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">
                  @if($resultado->puntoPorSet(3)->puntos_local > $resultado->puntoPorSet(3)->puntos_visita)
                  <b>{{isset($resultado->puntoPorSet(3)->puntos_local)? $resultado->puntoPorSet(3)->puntos_local : '0'}}</b>
                  @else
                  {{isset($resultado->puntoPorSet(3)->puntos_local)? $resultado->puntoPorSet(3)->puntos_local : '0'}}
                  @endif
                  </span> - <span class="team-leader__total">
                  @if($resultado->puntoPorSet(3)->puntos_visita > $resultado->puntoPorSet(3)->puntos_local)
                  <b>{{isset($resultado->puntoPorSet(3)->puntos_visita)? $resultado->puntoPorSet(3)->puntos_visita : '0'}} </b>
                  @else
                  {{isset($resultado->puntoPorSet(3)->puntos_visita)? $resultado->puntoPorSet(3)->puntos_visita : '0'}}
                  @endif
                  </span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">
                  @if($resultado->puntoPorSet(4)->puntos_local > $resultado->puntoPorSet(4)->puntos_visita) 
                  <b>{{isset($resultado->puntoPorSet(4)->puntos_local)? $resultado->puntoPorSet(4)->puntos_local : '0'}}</b>
                  @else
                  {{isset($resultado->puntoPorSet(4)->puntos_local)? $resultado->puntoPorSet(4)->puntos_local : '0'}}
                  @endif
                  </span> - <span class="team-leader__total">
                  @if($resultado->puntoPorSet(4)->puntos_visita > $resultado->puntoPorSet(4)->puntos_local)
                  <b>{{isset($resultado->puntoPorSet(4)->puntos_visita)? $resultado->puntoPorSet(4)->puntos_visita : '0'}}</b>
                  @else
                  {{isset($resultado->puntoPorSet(4)->puntos_visita)? $resultado->puntoPorSet(4)->puntos_visita : '0'}}
                  @endif
                  </span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">
                  @if($resultado->puntoPorSet(5)->puntos_local > $resultado->puntoPorSet(5)->puntos_visita)
                  <b>{{isset($resultado->puntoPorSet(5)->puntos_local)? $resultado->puntoPorSet(5)->puntos_local : '0'}}</b>
                  @else
                  {{isset($resultado->puntoPorSet(5)->puntos_local)? $resultado->puntoPorSet(5)->puntos_local : '0'}}
                  @endif
                  </span> - <span class="team-leader__total">
                  @if($resultado->puntoPorSet(5)->puntos_visita > $resultado->puntoPorSet(5)->puntos_local)
                  <b>{{isset($resultado->puntoPorSet(5)->puntos_visita)? $resultado->puntoPorSet(5)->puntos_visita : '0'}}</b>
                  @else
                  {{isset($resultado->puntoPorSet(5)->puntos_visita)? $resultado->puntoPorSet(5)->puntos_visita : '0'}}
                  @endif
                  </span></p>
                </div>
            </div>
            <div class="widget-results__team-logo">
                <center>
                  <div class="widget-results__team-details">
                  <h3><p>{{$resultado->visita_set}}</p></h3>
                </div></center>                        
                <center><figure class="widget-results__team-logo">
                  <img src="assets/webnueva/images/samples/logos/002.png" title="aca va nombre club completo">
                </figure></center>                        
                <center><div class="widget-results__team-logo">
                  <h5 class="widget-results__team-name"><p>{{$resultado->visita_equipo_id->sigla}}</p></h5>
                </div></center>
            </div>
      </div>            
            <time class="match-preview__date"><font size="2" class="fontEstadio"><p>@if(isset($resultado->estadio->nombre)) {{$resultado->estadio->nombre}} @else  @endif</p></font></time>
    </div>
  </div>
@endforeach