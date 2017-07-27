@foreach($proximos_partidos as $partido) 
<div class="team-roster__item card_novivo card--no-paddings">
    <div class="card__content">
        <h5 class="widget-results__title"><p>proxima fecha</p></h5>              
        <h5 class="widget-results__title"><p>{{$partido->fecha_inicio}} | {{$partido->hora}}</p></h5>
          <div class="widget-results__content">
              <div class="widget-results__team-logo"><h3></h3>                        
                <center><figure class="widget-results__team-logo">
                  <img src="assets/webnueva/images/samples/logos/001.png" alt="">
                </figure></center>
                <center><div class="widget-results__team-logo">
                  <h2 class="widget-results__team-name"><p>{{$partido->local_equipo_id->sigla}}</p></h2>
                </div></center>
              </div>
              <div class="widget-results__result">
                <div class="widget-results__score">
                  <span class="team-leader__total"><font size="5"><p>VS</p></font></span> 
                </div>
              </div>
              <div class="widget-results__team-logo"><h3></h3>                        
                <center><figure class="widget-results__team-logo">
                  <img src="assets/webnueva/images/samples/logos/008.png" alt="">
                </figure></center>                        
                <center><div class="widget-results__team-logo">
                  <h2 class="widget-results__team-name"><p>{{$partido->visita_equipo_id->sigla}}</p></h2>
              </div></center>
              </div>
          </div>
            <time class="match-preview__date"><font size="2" class="fontEstadio"><p> @if(isset($partido->estadio->nombre)) {{$partido->estadio->nombre}} @else No definido  @endif </p></font></time>
    </div>
</div> 
<!-- Fin proxima fecha -->  
@endforeach