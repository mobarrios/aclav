@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <div class="row">

          <!-- Content -->
          <div class="content col-md-8">

            <!-- Game Scoreboard -->
            <div class="card">
              <header class="card__header card__header--has-btn">
                <h4><p>{{$models->nombre}}</p></h4>
                <button class="btn btn-default3 btn-outline btn-xs card-header__button"><font size="1">Sigla ACLAV: {{$models->sigla}}</font></button>
              </header>
              <div class="card__content">
            
                <!-- Game Result -->
                <div class="game-result">
                  <section class="game-result__section">
                    <header class="game-result__header">
                      <div class="match-preview__match-place" align="center"><img src="uploads/escudos/{{$models->escudo}}" alt=""></div>
                    </header>
                    <div class="game-result__content">
            

                      
                      <!-- 2nd Team / End -->
                    </div>
            
                    
                  </section>
            <section class="game-result__section">
              <header class="game-result__subheader card__subheader">
                  <h3 class="game-result__subtitle"><font size="4"><p>Historia del Club</p></font></h3>
              </header>
                    
              <div class="game-result__content mb-0">
                      
                        
                <div class="post__content">
                 {{$models->historia}}
                </div>              
            </div>
          </section>
        </div>
        <!-- Game Result / End -->
            
              </div>
            </div>
            <!-- Game Scoreboard / End -->
            

            <!-- Team Roster: Table -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Jugadores</h4>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number">Imagen</th>
                        <th class="team-roster-table__number">N°</th>
                        <th class="team-roster-table__name">Apellido y Nombre</th>
                        <th class="team-roster-table__position hidden-xs hidden-sm">Posicion</th>
                        <th class="team-roster-table__age">Fecha Nac.</th>
                        <th class="team-roster-table__height">Altura</th>
                      </tr>
  
</thead>
                    <tbody>
                      @foreach($jugadores_actuales as $v)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="detalle_jugador.html"><img src="assets/images/j003.png" alt=""></a>
                            </figure></td>
                        <td class="team-roster-table__number"><a href="detalle_jugador.html"><font color="#000000">03</font></a></td> 
                        <td class="team-roster-table__name"><a href="detalle_jugador.html"><font color="#000000">Gauna Maximiliano</font></a></td>
                        <td class="team-roster-table__position hidden-xs hidden-sm"><a href="detalle_jugador.html"><font color="#000000">Punta Receptor</font></td>
                        <td class="team-roster-table__age"><a href="detalle_jugador.html"><font color="#000000">06-07-1978</font></a></td>
                        <td class="team-roster-table__height"><a href="detalle_jugador.html"><font color="#000000">188</font></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Team Roster: Table / End -->

            

            <!-- Team Roster: Table -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Jugadores dados de Baja</h4>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number">Imagen</th>
                        <th class="team-roster-table__number">N°</th>
                        <th class="team-roster-table__name">Apellido y Nombre</th>
                        <th class="team-roster-table__position hidden-xs hidden-sm">Posicion</th>
                        <th class="team-roster-table__age">Fecha Nac.</th>
                        <th class="team-roster-table__height">Altura</th>
                      </tr>
  
                  </thead>
                    <tbody>
                       @foreach($jugadores_baja as $ex_jugador)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="detalle_jugador.html"><img src="assets/images/j001.png" alt=""></a>
                            </figure></td>
                        <td class="team-roster-table__number"><a href="detalle_jugador.html"><font color="#000000">01</font></a></td>    
                        <td class="team-roster-table__name"><a href="detalle_jugador.html"><font color="#000000">Arce Federico</font></a></td>
                        <td class="team-roster-table__position hidden-xs hidden-sm"><a href="detalle_jugador.html"><font color="#000000">Punta Receptor</font></a></td>
                        <td class="team-roster-table__age"><a href="detalle_jugador.html"><font color="#000000">14-01-1998</font></a></td>
                        <td class="team-roster-table__height"><a href="detalle_jugador.html"><font color="#000000">176</font></a></td>
                      </tr>
                      @endforeach
                 
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Team Roster: Table / End -->

            <!-- Team Roster: Table -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Staff del Equipo</h4>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number">Imagen</th>
                        <th class="team-roster-table__name">Apellido y Nombre</th>
                        <th class="team-roster-table__age">Funcion</th>

                      </tr>
  
          </thead>
                    <tbody>
                        @foreach($staffs_actuales as $staff)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="detalle_staff.html"><font color="#000000"><img src="assets/images/s001.png" alt=""></a>
                            </figure></td>   
                        <td class="team-roster-table__name"> <a href="detalle_staff.html"><font color="#000000">Weber Javier</font></a></td>
                        <td class="team-roster-table__age"><a href="detalle_staff.html"><font color="#000000">Entrenador en Jefe</font></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Team Roster: Table / End -->
<!-- Team Roster: Table -->
            <!-- Team Roster: Table -->
            <div class="card card--has-table">
              <div class="card__header card__header--has-btn">
                <h4>Staff dados de baja</h4>
              </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number">Imagen</th>
                        <th class="team-roster-table__name">Apellido y Nombre</th>
                        <th class="team-roster-table__age">Funcion</th>
                        
                      </tr>
  
</thead>
                    <tbody>
                      @foreach($staffs_baja as $ex_staff)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="detalle_staff.html"><font color="#000000"><img src="assets/images/s001.png" alt=""></a>
                            </figure></td>   
                        <td class="team-roster-table__name"> <a href="detalle_staff.html"><font color="#000000">Weber Javier</font></a></td>
                        <td class="team-roster-table__age"><a href="detalle_staff.html"><font color="#000000">Entrenador en Jefe</font></a></td>
                      </tr>
                      @endforeach
                   
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Team Roster: Table / End -->
            <!-- Team Roster: Table / End -->
          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
           @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
        </div>


          </div>
        </div>
        <!-- Video Slideshow / End -->

      </div>
    </div>
         
@endsection