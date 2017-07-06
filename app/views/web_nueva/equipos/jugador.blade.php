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
                <h4><p>{{$models->nombre}} {{$models->apellido}}</p></h4>
                
              </header>
              <div class="card__content">
            
                <!-- Game Result -->
                <div class="game-result">
                  <section class="game-result__section">
                    <header class="game-result__header">
                      <div class="match-preview__match-place" align="center"><img src="uploads/jugadores/{{$models->foto}}" alt=""></div>
                    </header>
                    <div class="game-result__content">
            

                      
                      <!-- 2nd Team / End -->
                    </div>
            
                    
                  </section>
                  <section class="game-result__section">
                    <header class="game-result__subheader card__subheader">
                      <h5 class="game-result__subtitle"><p>Detalles</p></h5>
                    </header>
                    <div class="game-result__content mb-0">
                      <div class="row">
                        
                        <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      
  
					</thead>
                    <tbody>
                      <tr>
                        
                        <td class="team-roster-table__number">Posición: </td>    
                        <td class="team-roster-table__name">{{$models->Posicion($models->posicion)}}</td>
                        
                        
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Fecha Nac.:</td> 
                        <td class="team-roster-table__name">{{$models->fecha_nacimiento}}</td>
                       
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Nacionalidad:</td> 
                        <td class="team-roster-table__name">Argentino</td>
                       
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Altura:</td> 
                        <td class="team-roster-table__name">{{$models->altura}}</td>
                        
                      </tr>
                      <tr>
                       
                        <td class="team-roster-table__number">Peso:</td> 
                        <td class="team-roster-table__name">{{$models->peso}}</td>
                      
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Alcance Ataque:</td> 
                        <td class="team-roster-table__name">{{$models->alcance_ataque}}</td>
                        
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Alcance Bloqueo:</td> 
                        <td class="team-roster-table__name">{{$models->alcance_bloqueo}}</td>
                        
                      </tr>
                      
                      <tr>
                        
                        <td class="team-roster-table__number">Carrera:</td> 
                        <td class="team-roster-table__name">equipos donde jugó en temporadas anteriores. Podemos ya poner lo
que figura en el sistema. Habría que hacer una tabla con columnas para poner los
siguientes datos: temporada, serie, nombre del equipo donde jugó, nº de camiseta con
el que jugó, nacionalidad (la sigla de 3 letras), notas (para poner “desde” o
“hasta” si se incorporó al equipo luego de presentado el O2 o si lo dieron de baja
antes de finalizar la temporada). Adjunto un par de capturas como ejemplo</td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>

                      </div>
                    </div>
                  </section>
                </div>
                <!-- Game Result / End -->
            
              </div>
            </div>
            <!-- Game Scoreboard / End -->
            

            

           
            <!-- Team Roster: Table / End -->
          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
         @include('web_nueva.template.sidebar')	
          <!-- Sidebar / End -->
        </div>

       </div>
      

      </div>
    </div>
@endsection    