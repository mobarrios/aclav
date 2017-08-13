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
                          <div class="game-result__date"><p>25-22 / 25-22 / 25-21 <br> 26-24 / 25-23 </p></div>
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
              <div class="glossary__item"><span class="glossary__abbr">Torneo:</span> </div>
              <div class="glossary__item"><span class="glossary__abbr">Fase:</span> Fase Clasificacion - 1er Triangular</div>
              <div class="glossary__item"><span class="glossary__abbr">Etapa:</span> Weekend 11</div>
              <div class="glossary__item"><span class="glossary__abbr">Fecha:</span> {{$partido->fecha_inicio}} </div>
              <div class="glossary__item"><span class="glossary__abbr">Hora:</span> {{$partido->hora}} hs</div>
              <div class="glossary__item"><span class="glossary__abbr">N° de Partido:</span> {{$partido->numero_partido}}</div>
              <div class="glossary__item"><span class="glossary__abbr">1º Arbitro:</span> {{ $partido->Arbitro1->nombre }}, {{ $partido->Arbitro1->apellido }} </div>
              <div class="glossary__item"><span class="glossary__abbr">2º Arbitro:</span> {{$partido->Arbitro2->nombre }}, {{ $partido->Arbitro1->apellido }}</div>
              <div class="glossary__item"><span class="glossary__abbr">Estadio:</span> {{ $partido->Estadio->nombre }}</div>
              <div class="glossary__item"><span class="glossary__abbr">Televisado:</span> <a href="#"><img src="assets/images/tyc_tv.png"></a></div>
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
                            <th class="team-leader__total">Apellido y Nombre</th>
                            <th class="team-leader__gp">Posición</th>                            
                          </tr>
                        </thead>
                        <tbody>


                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">01</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">Arce Federico</td>
                            <td class="team-leader__gp">Punta Receptor</td>                            
                          </tr>
                                             
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
                            <th class="team-leader__type">Apellido y Nombre</th>
                            <th class="team-leader__total">Función</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">Weber Javier</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">Entrenador en Jefe</td>                            
                          </tr>
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
                            <th class="team-leader__total">Apellido y Nombre</th>
                            <th class="team-leader__gp">Posición</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">01</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">Arce Federico</td>
                            <td class="team-leader__gp">Punta Receptor</td>                            
                          </tr>
                          
                                             
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
                            <th class="team-leader__type">Apellido y Nombre</th>
                            <th class="team-leader__total">Función</th>                            
                          </tr>
                        </thead>
                        <tbody>
                         
                          <tr>
                            <td class="team-leader__player">
                              <div class="team-leader__player-info">                                
                                <div class="team-leader__player-inner">
                                  <h5 class="team-leader__player-name">Weber Javier</h5>                                  
                                </div>
                              </div>
                            </td>
                            <td class="team-leader__total">Entrenador en Jefe</td>                            
                          </tr>
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