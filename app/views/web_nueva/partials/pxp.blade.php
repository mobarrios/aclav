@foreach($partidosDiarios as $pxp)

<div class="actual team-roster__item card card--no-paddings">
<div class="card__content">              
<h5 class="widget-results__title">
@if($pxp->hora == 'a Confirmar')
<font size="1">
@else
<font size="2">
@endif
<p>{{ strtoupper($pxp->getFechaDeInicio()) }} | {{$pxp->hora}} <span class="label1 posts__cat-label1">
@if($pxp->televisado == 1 )
<a class="chac" href="{{$pxp->televisado_url ? $pxp->televisado_url  : '#' }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Play">
<img src="assets/webnueva/images/tyc_play.png"></a> <span style="font-weight:100;color:#CD3243"> |
@elseif($pxp->televisado == 2 )
<a class="chac" href="{{$pxp->televisado_url ? $pxp->televisado_url  : '#' }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Sports">
<img src="assets/webnueva/images/tyc_tv.png"></a> <span style="font-weight:100;color:#CD3243"> |
@endif

</span>
</p>
</font>
</h5>              
<div class="widget-results__content resultados">
        <div class="widget-results__team-logo">
          <center>
            <div class="widget-results__team-details">
            <h3><p>{{$pxp->local_set}}</p></h3>
          </div></center>                        
          <center><figure class="widget-results__team-logo">
          @if($pxp->local_text == '')
            <img src="uploads/escudos/{{$pxp->local_equipo_id->escudo}}" title="{{$pxp->local_equipo_id->nombre}}">
          @endif
          </figure></center>
          <center><div class="widget-results__team-logo">
            <h5 class="widget-results__team-name"><p>
            @if($pxp->local_text != '')
                {{$pxp->local_text}}
            @else
                {{isset($pxp->local_equipo_id->sigla) ? $pxp->local_equipo_id->sigla : '' }}
            @endif
            </p>

            </h5>
          </div></center>
        </div>
        <div class="widget-results__result">
          <div class="widget-results__score">
            <p>
            <span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(1)->puntos_local > $pxp->puntoPorSet(1)->puntos_visita)
                  <b>{{isset($pxp->puntoPorSet(1)->puntos_local) ? $pxp->puntoPorSet(1)->puntos_local : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(1)->puntos_local) ? $pxp->puntoPorSet(1)->puntos_local : '0'}}
              @endif 
            @else
             0
            @endif
            </span> - <span class="team-leader__total">

            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(1)->puntos_visita > $pxp->puntoPorSet(1)->puntos_local)
              <b>{{isset($pxp->puntoPorSet(1)->puntos_visita)? $pxp->puntoPorSet(1)->puntos_visita : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(1)->puntos_visita)? $pxp->puntoPorSet(1)->puntos_visita : '0'}} 
              @endif
            @else
             0
            @endif
            </span>
            </p>        
          </div>
          <div class="widget-results__score">
            <p>
            <span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(2)->puntos_local > $pxp->puntoPorSet(2)->puntos_visita)
              <b>{{isset($pxp->puntoPorSet(2)->puntos_local)? $pxp->puntoPorSet(2)->puntos_local : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(2)->puntos_local)? $pxp->puntoPorSet(2)->puntos_local : '0'}}
              @endif
            @else
             0
            @endif
            </span> - <span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(2)->puntos_visita > $pxp->puntoPorSet(2)->puntos_local)
              <b>{{isset($pxp->puntoPorSet(2)->puntos_visita)? $pxp->puntoPorSet(2)->puntos_visita : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(2)->puntos_visita)? $pxp->puntoPorSet(2)->puntos_visita : '0'}}
              @endif
            @else
             0
            @endif
            </span>
            </p>         
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(3)->puntos_local > $pxp->puntoPorSet(3)->puntos_visita)
              <b>{{isset($pxp->puntoPorSet(3)->puntos_local)? $pxp->puntoPorSet(3)->puntos_local : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(3)->puntos_local)? $pxp->puntoPorSet(3)->puntos_local : '0'}}
              @endif
            @else
             0
            @endif
            </span> - <span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(3)->puntos_visita > $pxp->puntoPorSet(3)->puntos_local)
              <b>{{isset($pxp->puntoPorSet(3)->puntos_visita)? $pxp->puntoPorSet(3)->puntos_visita : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(3)->puntos_visita)? $pxp->puntoPorSet(3)->puntos_visita : '0'}}
              @endif
            @else
             0
            @endif
            </span>
             </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(4)->puntos_local > $pxp->puntoPorSet(4)->puntos_visita)
              <b>{{isset($pxp->puntoPorSet(4)->puntos_local)? $pxp->puntoPorSet(4)->puntos_local : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(4)->puntos_local)? $pxp->puntoPorSet(4)->puntos_local : '0'}}
              @endif
            @else
             0
            @endif
            </span> - <span class="team-leader__total">

            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(4)->puntos_visita > $pxp->puntoPorSet(4)->puntos_local)
              <b>{{isset($pxp->puntoPorSet(4)->puntos_visita)? $pxp->puntoPorSet(4)->puntos_visita : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(4)->puntos_visita)? $pxp->puntoPorSet(4)->puntos_visita : '0'}}
              @endif
            @else
             0
            @endif
            </span> </p>        
          </div>
          <div class="widget-results__score">
            <p><span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(5)->puntos_local > $pxp->puntoPorSet(5)->puntos_visita)
              <b>{{isset($pxp->puntoPorSet(5)->puntos_local)? $pxp->puntoPorSet(5)->puntos_local : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(5)->puntos_local)? $pxp->puntoPorSet(5)->puntos_local : '0'}}
              @endif
            @else
             0
            @endif
            </span> - <span class="team-leader__total">
            @if($pxp->estado == 1)
              @if($pxp->puntoPorSet(5)->puntos_visita > $pxp->puntoPorSet(5)->puntos_local)
              <b>{{isset($pxp->puntoPorSet(5)->puntos_visita)? $pxp->puntoPorSet(5)->puntos_visita : '0'}}</b>
              @else
              {{isset($pxp->puntoPorSet(5)->puntos_visita)? $pxp->puntoPorSet(5)->puntos_visita : '0'}}
              @endif
            @else
             0
            @endif
            </span>
            </p>         
          </div>
        </div>
        <div class="widget-results__team-logo">
          <center>
            <div class="widget-results__team-details">
            <h3><p>{{$pxp->visita_set}}</p></h3>
          </div></center>                        
          <center><figure class="widget-results__team-logo">
          @if($pxp->local_text == '')
            <img src="uploads/escudos/{{$pxp->visita_equipo_id->escudo}}" title="{{$pxp->visita_equipo_id->nombre}}">
          @endif
          </figure></center>                        
          <center><div class="widget-results__team-logo">
            <h5 class="widget-results__team-name"><p>
            @if($pxp->visita_text != '')
                {{$pxp->visita_text}}
            @else
            {{isset($pxp->visita_equipo_id->sigla) ? $pxp->visita_equipo_id->sigla : '' }}
            @endif
            </p></h5>
          </div></center>
        </div>
      </div>            
<time class="match-preview__date"><font size="2" class="fontEstadio"><p>@if(isset($pxp->estadio->nombre)) {{$pxp->estadio->nombre}} @else No definido  @endif </p></font></time>

</div>
</div>
@endforeach