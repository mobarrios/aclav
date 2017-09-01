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
                        <td class="team-roster-table__name"><h5><p>{{$models->Posicion($models->posicion)}}</p></h5></td>
                        
                        
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Fecha Nac.:</td> 
                        <td class="team-roster-table__name"><h5><p>{{$models->fecha_nacimiento}}</p></h5></td>
                       
                      </tr>
                      
                      <tr>
                        
                        <td class="team-roster-table__number">Altura:</td> 
                        <td class="team-roster-table__name"><h5><p>{{$models->altura}}</p></h5></td>
                        
                      </tr>
                      <tr>
                       
                        <td class="team-roster-table__number">Peso:</td> 
                        <td class="team-roster-table__name"><h5><p>{{$models->peso}}</p></h5></td>
                      
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Alcance Ataque:</td> 
                        <td class="team-roster-table__name"><h5><p>{{$models->alcance_ataque}}</p></h5></td>
                        
                      </tr>
                      <tr>
                        
                        <td class="team-roster-table__number">Alcance Bloqueo:</td> 
                        <td class="team-roster-table__name"><h5><p>{{$models->alcance_bloqueo}}</p></h5></td>
                        
                      </tr>
                      
                      <tr>
                        
                        <!-- <td class="team-roster-table__number">Carrera:</td>  -->
                        
                    </tbody>
                  </table>
                  <div class="table-responsive">
                  <!-- <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__name">Temporada</th>
                        <th class="team-roster-table__name">Serie</th>
                        <th class="team-roster-table__name">Equipo</th>
                        <th class="team-roster-table__name">N°</th>
                        <th class="team-roster-table__name">Nacionalidad</th>
                        <th class="team-roster-table__name">Notas</th>
                      </tr>
  
</thead>
                    <tbody>
                      <tr>
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>    
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>
                        <td class="team-roster-table__name"><font color="#000000">xxxx</font></a></td>
                      </tr>
                      
                     </tbody>
                  </table> -->
                </div>
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