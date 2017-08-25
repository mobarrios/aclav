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
                  <p><span class="team-leader__total">{{isset($resultado->ventajaPorSet(1)['local'])? $resultado->ventajaPorSet(1)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($resultado->ventajaPorSet(1)['visita'])? $resultado->ventajaPorSet(1)['visita'] : '0'}}</span> </p>  
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">{{isset($resultado->ventajaPorSet(2)['local'])? $resultado->ventajaPorSet(2)['local'] : '0'}} </span> - <span class="team-leader__total">{{isset($resultado->ventajaPorSet(2)['visita'])? $resultado->ventajaPorSet(2)['visita'] : '0'}}</span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">{{isset($resultado->ventajaPorSet(3)['local'])? $resultado->ventajaPorSet(3)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($resultado->ventajaPorSet(3)['visita'])? $resultado->ventajaPorSet(3)['visita'] : '0'}}</span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">{{isset($resultado->ventajaPorSet(4)['local'])? $resultado->ventajaPorSet(4)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($resultado->ventajaPorSet(4)['visita'])? $resultado->ventajaPorSet(4)['visita'] : '0'}}</span></p>
                </div>
                <div class="widget-results__score">
                  <p><span class="team-leader__total">{{isset($resultado->ventajaPorSet(5)['local'])? $resultado->ventajaPorSet(5)['visita'] : '0'}}</span> - <span class="team-leader__total">{{isset($resultado->ventajaPorSet(5)['visita'])? $resultado->ventajaPorSet(5)['visita'] : '0'}}</span></p>
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