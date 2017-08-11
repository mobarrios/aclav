@extends('web_nueva.template')
@section('site-content')

 <div class="site-content1">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

          <div class="row">

          <!-- Content -->
          <div class="content col-md-12">

            <!-- inicio encabezado temporadas -->
            <div class="card1 card--clean">
              <header class="card__header card__header--shop-filter">
                <div class="shop-filter">
                  <h4 class="shop-filter__result">Calendario y Resultados</h4>
                  <ul class="shop-filter__params">
                    <li class="shop-filter__control">
                      <select class="form-control input-sm">
                      @foreach($temporadas as $temporada)
                        <option value="{{$temporada->id}}">Temporada  {{$temporada->nombre_temporada}}</option>
                      @endforeach
                      </select>
                    </li>                
                  </ul>                  
                </div>
              </header>                     
            </div>
            <!-- fin encabezado temporadas -->

            <!-- inicio Encabezado fases -->
            <div class="card1">              
              <div>                
                <center>
                    <a href="#" class="btn btn-default1 btn-outline btn-sm card-header__button">
                    </font><i class="fa fa-bars"></i>
                    </a>   

                      @foreach($fases as  $fase)
                        
                        <label  class="fase btn btn-default1 btn-outline btn-sm card-header__button" data-id="{{$fase->id}}">{{$fase->nombre}}</label>
                        
                      @endforeach
                  
                </center>       
              </div>             
            </div>              
            <!-- fin Encabezado fases-->

            <!-- inicio Encabezado weekends ocultos -->

              @foreach($fases as $fase )
                <div class="card1 weeks card{{$fase->id}}" style="display: none;">  
                <center>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">
                    </font><i class="fa fa-bars"></i>
                    </a>   
                      @foreach($fase->leg as $leg)            
                        <a href="{{route('calendario' , array($torneo->id, $leg->id) )}}" class=" btn btn-default1 btn-outline btn-xs card-header__button">{{$leg->nombre}}</a>
                      @endforeach     
                 </center>                            
              </div>
              @endforeach

            
            
            <!-- fin Encabezado weekends ocultos -->

            <!-- comienzo Encabezado por equipos -->
            <div class="card">                             
              <center>
                  @foreach($torneo->Equipo as $equipo)
                      <a href="#" style="width: 5%" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="uploads/escudos/{{$equipo->escudo}}" title="{{$equipo->nombre}}"></a>
                  @endforeach
              </center>                                   
            </div> 
            <!-- fin Encabezado por equipos -->


{{--             @foreach($fases as $fase)
 --}}             

               @foreach($legs as $leg)
            
                  @foreach($leg->partidoCalendario as $partido)
                  <!-- comienzo primer Equipo -->
                  <div class="card1" id='{{($partido->fecha_inicio == $today) ? 'today' : '' }}' >
                          <div class="card__content1">                
                              <!-- comienzo titulos -->
                              <header class="game-result__header1 game-result__header--alt">
                                <span class="game-result__league"><b>N° {{$partido->numero_partido}}</b></span>
                                  <h3 class="game-result__title">{{$leg->fase->nombre}} :  {{$leg->nombre}}</h3>
                                  <time class="game-result__league1"><b>{{$partido->fecha_inicio}} : {{$partido->hora}}  </b></time>
                              </header>                         
                              <!-- fin titulos -->                    
                              <!-- comienzo primer Equipo -->
                              <div class="widget-game-result__main">                        
                                    <div class="widget-game-result__team widget-game-result__team--first">
                                        <figure class="widget-game-result__team-logo">
                                          <img src="uploads/escudos/{{ ($partido->local_text == '') ? $partido->local_equipo_id->escudo: ''  }}" alt="">
                                        </figure>
                                    <div class="widget-game-result__team-info">
                                          <h2 class="game-result__date"><font size="2"><p>{{ ($partido->local_text == '') ? $partido->local_equipo_id->nombre: 'a Confirmar'  }}</p></font></h2>
                                    </div>
                              </div>
                              <!-- fin primer Equipo -->                
                              <!-- comienzo resultado medio -->
                              <div class="widget-game-result__score-wrap">
                                  <div class="widget-game-result__score">
                                      <h3 class="widget-game-result__title"><p>{{$partido->local_set}} - {{$partido->visita_set}}</p></h3>
                                      <div class="game-result__date"><font size="3">
                                      <p>
                                          @foreach($partido->puntoPartido as $punto)
                                          {{$punto->puntos_local}} - {{$punto->puntos_local}}  
                                          @endforeach
                                      </p>
                                      </font></div>          
                                        <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Sports"><img src="assets/images/tyc_tv.png"></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                                        <a href="{{route('informacion',$partido->id)}}" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                                        <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                                    </div>                        
                              </div>
                              <!-- fin resultado medio -->                   
                              <!-- comienzo segundo Equipo -->
                              <div class="widget-game-result__team widget-game-result__team--first">
                                    <figure class="widget-game-result__team-logo">
                                      <img src="uploads/escudos/{{ ($partido->visita_text == '') ? $partido->visita_equipo_id->escudo: ''  }}" alt="">
                                    </figure>
                                    <div class="widget-game-result__team-info">
                                        <h2 class="game-result__date"><font size="2"><p>{{ ($partido->visita_text == '') ? $partido->visita_equipo_id->nombre: 'a Confirmar'  }}</p></font></h2>
                                    </div>
                              </div>
                              <!-- fin segundo Equipo -->
                          </div>
                          </div>
                        </div>         
                  @endforeach
                             
                  <!-- fin de una fecha -->
                  @endforeach
                  


                {{-- @endforeach --}}
        
                  </section>
                  </div>
                </div>
            </div>
            <!-- Game Scoreboard / End -->
            <br>         
          </div>
        </div>
      </div>
    </div>
@endsection     


@section('javascript')

<script type="text/javascript">

     $('html, body').animate({
        scrollTop: $("#today").offset().top
    }, 2000);
</script>
@endsection   

