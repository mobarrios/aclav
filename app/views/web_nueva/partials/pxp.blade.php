@foreach($partidosDiarios as $pxp)

<div class="team-roster__item card card--no-paddings active">
<div class="card__content">              
<h5 class="widget-results__title">
@if($pxp->hora == 'a Confirmar')
<font size="1">
@else
<font size="2">
@endif
<p>{{$pxp->fecha_inicio}} | {{$pxp->hora}} <span class="label1 posts__cat-label1"><a href="#"><img src="assets/webnueva/images/tyc_play.png"></a></span></p></font></h5>              
<div class="widget-results__content resultados">
        <div class="widget-results__team-logo">
          <center>
            <div class="widget-results__team-details">
            <h3><p>{{$pxp->local_set}}</p></h3>
          </div></center>                        
          <center><figure class="widget-results__team-logo">
            <img src="uploads/escudos/{{$pxp->local_equipo_id->escudo}}" title="{{$pxp->local_equipo_id->nombre}}">
          </figure></center>
          <center><div class="widget-results__team-logo">
            <h5 class="widget-results__team-name"><p>{{isset($pxp->local_equipo_id->sigla) ? $pxp->local_equipo_id->sigla : '' }}</p></h5>
          </div></center>
        </div>
        <div class="widget-results__result">
          <div class="widget-results__score">
            <p>
          
{{--             <span class="team-leader__total">{{isset($pxp->ventajaPorSet(1)['local'])? $pxp->ventajaPorSet(1)['local'] : '0'}} 
            </span> - <span class="team-leader__total">{{isset($pxp->ventajaPorSet(1)['visita'])? $pxp->ventajaPorSet(1)['visita'] : '0'}}</span>
            </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->ventajaPorSet(2)['local'])? $pxp->ventajaPorSet(2)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->ventajaPorSet(2)['visita'])? $pxp->ventajaPorSet(2)['visita'] : '0'}}</span></p>         
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->ventajaPorSet(3)['local'])? $pxp->ventajaPorSet(3)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->ventajaPorSet(3)['visita'])? $pxp->ventajaPorSet(3)['visita'] : '0'}}</span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->ventajaPorSet(4)['local'])? $pxp->ventajaPorSet(4)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->ventajaPorSet(4)['visita'])? $pxp->ventajaPorSet(4)['visita'] : '0'}}</span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->ventajaPorSet(5)['local'])? $pxp->ventajaPorSet(5)['local'] : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->ventajaPorSet(5)['visita'])? $pxp->ventajaPorSet(5)['visita'] : '0'}}</span></p>          --}}
          </div>
        </div>
        <div class="widget-results__team-logo">
          <center>
            <div class="widget-results__team-details">
            <h3><p>{{$pxp->visita_set}}</p></h3>
          </div></center>                        
          <center><figure class="widget-results__team-logo">
            <img src="uploads/escudos/{{$pxp->visita_equipo_id->escudo}}" title="{{$pxp->visita_equipo_id->nombre}}">
          </figure></center>                        
          <center><div class="widget-results__team-logo">
            <h5 class="widget-results__team-name"><p>{{isset($pxp->visita_equipo_id->sigla) ? $pxp->visita_equipo_id->sigla : '' }}</p></h5>
          </div></center>
        </div>
      </div>            
<time class="match-preview__date"><font size="2" class="fontEstadio"><p>@if(isset($pxp->estadio->nombre)) {{$pxp->estadio->nombre}} @else No definido  @endif </p></font></time>

</div>
</div>
@endforeach