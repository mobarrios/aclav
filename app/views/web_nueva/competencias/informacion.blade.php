@extends('web_nueva.template')
@section('site-content')

 <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <div class="row">

          <!-- Content -->
          <div class="content col-md-12">

            <!-- Inicio Tabla -->
            <div class="card1">
              <header class="card__header card__header--has-btn">
                <h4>Información del Partido</h4>                
              </header>                
              <div class="card__content">                                      
                  <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" alt="">
                            </figure>
                        <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>{{$partido->local_equipo_id->nombre}}</p></font></h2>
                        </div>
                  </div>
                  <!-- fin primer Equipo -->                
                  <!-- comienzo resultado medio -->
                  <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <h3 class="widget-game-result__title"><p>{{$partido->local_set}} - {{$partido->visita_set}}</p></h3>
                          <div class="game-result__date"><p> @foreach($partido->puntoPartido as $punto)
                                          {{$punto->puntos_local}} - {{$punto->puntos_local}}  
                                          @endforeach </p></div>
                      </div>                        
                  </div>
                  <!-- fin resultado medio -->                   
                  <!-- comienzo segundo Equipo -->
                  <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>{{$partido->visita_equipo_id->nombre}}</p></font></h2>
                        </div>
                  </div>
                  <!-- fin segundo Equipo -->
              </div>
            </div>
            </div> 
            </div>               
            </div>
        <!-- Fin Tabla -->
        
        <!-- Inicio Tabla -->
        <div class="card1">
          <div class="card__header">
            <h4>Detalles</h4>
          </div>
          <div class="card__content">
            <div class="glossary">
              <div class="glossary__item"><span class="glossary__abbr">Torneo:</span> {{$torneo_fase->TorneoFaseLeg->fase->Torneo->nombre_torneo}} </div>
              <div class="glossary__item"><span class="glossary__abbr">Fase:</span> {{$torneo_fase->TorneoFaseLeg->fase->nombre}} </div>
              <div class="glossary__item"><span class="glossary__abbr">Etapa:</span> {{$torneo_fase->TorneoFaseLeg->nombre}} </div>
              <div class="glossary__item"><span class="glossary__abbr">Fecha:</span> {{$partido->fecha_inicio}} </div>
              <div class="glossary__item"><span class="glossary__abbr">Hora:</span> {{$partido->hora}} hs</div>
              <div class="glossary__item"><span class="glossary__abbr">N° de Partido:</span> {{$partido->numero_partido}}</div>
              <div class="glossary__item"><span class="glossary__abbr">1º Arbitro:</span> {{ isset($partido->Arbitro1->nombre) ? $partido->Arbitro1->nombre : '' }} , {{ isset($partido->Arbitro1->apellido) ? $partido->Arbitro1->apellido : '' }}
               </div>
              <div class="glossary__item"><span class="glossary__abbr">2º Arbitro:</span> {{ isset($partido->Arbitro2->nombre) ? $partido->Arbitro2->nombre : '' }} , {{ isset($partido->Arbitro2->apellido) ? $partido->Arbitro2->apellido : '' }}</div>
              <div class="glossary__item"><span class="glossary__abbr">Estadio:</span> {{ $partido->Estadio->nombre }}</div>
              
              <div class="glossary__item"><span class="glossary__abbr">Televisado:</span> 
                
                  @if($partido->televisado == 1 )  
                  <a href="{{$partido->televisado_url ? $partido->televisado_url  : '#' }}"><img src="assets/webnueva/images/tyc_tv.png"></a>
                  @endif
              </div>
         
            </div>
          </div>
        </div>
        <!-- Fin Tabla -->

        <div class="row">  

          <!-- Comienzo tabla equipo 1 -->
              <div class="col-md-6">
                <!-- Widget: Team Leaders -->
                <aside class="widget widget--sidebar card card--has-table widget-leaders">
                  <div class="widget__title card__header">
                    <h4>{{$partido->local_equipo_id->nombre}}</h4>
                  </div>
                  <div class="widget__content card__content">
                    
                    <!-- Leader: Points -->
                    <div class="table-responsive">
                      <table class="table team-leader">
                        <thead>
                          <tr>
                            <th class="team-leader__type">N°</th>
                            <th class="team-leader__total">Nombre y Apellido</th>
                            <th class="team-leader__gp">Posición</th>                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($jugadores_locales as $j)
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">{{$j->BuenaFe->nro}}</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">{{ $j->BuenaFe->Jugador->nombre}} {{ $j->BuenaFe->Jugador->apellido}} </td>
                            <td class="team-leader__gp">{{$j->BuenaFe->Jugador->Posicion($j->BuenaFe->Jugador->posicion)}}</td>                            
                          </tr>
                        @endforeach  
                        </tbody>
                      </table>
                    </div>
                    <!-- Leader: Points / End -->
                
                    <!-- Leader: Assists -->
                    <div class="table-responsive">
                      <table class="table team-leader">
                        <header class="game-result__subheader card__subheader">
                          <h5 class="game-result__subtitle">Staff</h5>
                        </header>
                        <thead>                          
                          <tr>
                            <th class="team-leader__type"> Nombre y Apellido</th>
                            <th class="team-leader__total">Función</th>                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($staff_local as $s)
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">{{$s->BuenaFeStaff->Oficial->nombre}} {{$s->BuenaFeStaff->Oficial->apellido}}</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total"> {{ isset($s->BuenaFeStaff->Oficial->Funcion->funcion) ? $s->BuenaFeStaff->Oficial->Funcion->funcion : '' }}</td>                            
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- Leader: Assists / End -->            
                
                  </div>
                </aside>
                <!-- Widget: Team Leaders / End -->             

              </div>
            <!-- fin tabla equipo 1 -->


            <!-- comienzo tabla equipo 2 -->
              <div class="col-md-6">
                <!-- Widget: Team Leaders -->
                <aside class="widget widget--sidebar card card--has-table widget-leaders">
                  <div class="widget__title card__header">
                    <h4>{{$partido->visita_equipo_id->nombre}}</h4>
                  </div>
                  <div class="widget__content card__content">
                
                    <!-- Leader: Points -->
                    <div class="table-responsive">
                      <table class="table team-leader">
                        <thead>
                          <tr>
                            <th class="team-leader__type">N°</th>
                            <th class="team-leader__total">Nombre y Apellido</th>
                            <th class="team-leader__gp">Posición</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($jugadores_visitantes as $j)
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">{{ $j->BuenaFe->nro}} </h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total"> {{ $j->BuenaFe->Jugador->nombre}} {{ $j->BuenaFe->Jugador->apellido}}</td>
                            <td class="team-leader__gp">{{ $j->BuenaFe->Jugador->Posicion($j->BuenaFe->Jugador->posicion)}}</td>                            
                          </tr>
                           @endforeach 
                                             
                        </tbody>
                      </table>
                    </div>
                    <!-- Leader: Points / End -->
                
                    <!-- Leader: Assists -->
                    <div class="table-responsive">
                      <table class="table team-leader">
                        <header class="game-result__subheader card__subheader">
                          <h5 class="game-result__subtitle">Staff</h5>
                        </header>
                        <thead>                          
                          <tr>
                            <th class="team-leader__type">Nombre y Apellido</th>
                            <th class="team-leader__total">Función</th>                            
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($staff_visitante as $s)
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">{{$s->BuenaFeStaff->Oficial->nombre}} {{$s->BuenaFeStaff->Oficial->apellido}}</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">{{ isset($s->BuenaFeStaff->Oficial->Funcion->funcion) ? $s->BuenaFeStaff->Oficial->Funcion->funcion : '' }}</td>                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- Leader: Assists / End -->            
                
                  </div>
                </aside>
                <!-- Widget: Team Leaders / End -->             

              </div>
            <!-- fin tabla equipo 1 -->
            </div>           

          </div>
          <!-- Content / End -->

           
          </div>
        </div>
      </div>
    </div>


@endsection