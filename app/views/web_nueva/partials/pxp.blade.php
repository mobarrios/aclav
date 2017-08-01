@foreach($partidosDiarios as $pxp)

<div class="team-roster__item card card--no-paddings">
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
            <img src="assets/webnueva/images/samples/logos/001.png" title="aca va el nombre del club completo">
          </figure></center>
          <center><div class="widget-results__team-logo">
            <h5 class="widget-results__team-name"><p>{{isset($pxp->local_equipo_id->sigla) ? $pxp->local_equipo_id->sigla : '' }}</p></h5>
          </div></center>
        </div>
        <div class="widget-results__result">
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->puntoPorSet(1)->puntos_local)? $pxp->puntoPorSet(1)->puntos_local : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->puntoPorSet(1)->puntos_visita)? $pxp->puntoPorSet(1)->puntos_visita : '0'}}</span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->puntoPorSet(2)->puntos_local)? $pxp->puntoPorSet(2)->puntos_local : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->puntoPorSet(2)->puntos_visita)? $pxp->puntoPorSet(2)->puntos_visita : '0'}}</span></p>         
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->puntoPorSet(3)->puntos_local)? $pxp->puntoPorSet(3)->puntos_local : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->puntoPorSet(3)->puntos_visita)? $pxp->puntoPorSet(3)->puntos_visita : '0'}}</span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->puntoPorSet(4)->puntos_local)? $pxp->puntoPorSet(4)->puntos_local : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->puntoPorSet(4)->puntos_visita)? $pxp->puntoPorSet(4)->puntos_visita : '0'}}</span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">{{isset($pxp->puntoPorSet(5)->puntos_local)? $pxp->puntoPorSet(5)->puntos_local : '0'}}</span> - <span class="team-leader__total">{{isset($pxp->puntoPorSet(5)->puntos_visita)? $pxp->puntoPorSet(5)->puntos_visita : '0'}}</span></p>         
          </div>
        </div>
        <div class="widget-results__team-logo">
          <center>
            <div class="widget-results__team-details">
            <h3><p>{{$pxp->visita_set}}</p></h3>
          </div></center>                        
          <center><figure class="widget-results__team-logo">
            <img src="assets/webnueva/images/samples/logos/002.png" title="aca va nombre club completo">
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