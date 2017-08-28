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


                    @foreach($jugadores as $k)
                      @if($k->fecha_hasta == 'actual' && $k->borrado == 0)
                        <tr>
                          <td class="team-roster-table__number">
                            <figure class="team-meta__logo">
                              <a href="{{route('jugador',$k->Jugador->id)}}"><img src="uploads/jugadores/{{$k->Jugador->Foto}}" alt=""></a>
                            </figure>
                          </td>
                          <td class="team-roster-table__number">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->nro}}</font></a>
                          </td> 
                          <td class="team-roster-table__name">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->apellido}} {{$k->Jugador->nombre}}</font></a>
                          </td>
                          <td class="team-roster-table__position hidden-xs hidden-sm">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->Posicion($k->Jugador->posicion)}}</font>
                          </td>
                          <td class="team-roster-table__age">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->fecha_nacimiento}}</font></a>
                          </td>
                          <td class="team-roster-table__height">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->altura}}</font></a>
                          </td>  
                        </tr>
                      @endif
                    @endforeach

                      {{-- @foreach($jugadores_actuales as $v)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="{{route('jugador',$v['jugador_id']['id'])}}"><img src="uploads/jugadores/{{$v['jugador_id']['foto']}}" alt=""></a>
                            </figure></td>
                        <td class="team-roster-table__number"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['buena_fe']['nro']}}</font></a></td> 
                        <td class="team-roster-table__name"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['jugador_id']['apellido']}} {{$v['jugador_id']['nombre']}}
                          @if($v['buena_fe']['fecha_desde']!= '0000-00-00')
                            <p>desde {{$v['buena_fe']['fecha_desde']}}</p>
                          @endif
                        </font></a></td>
                        <td class="team-roster-table__position hidden-xs hidden-sm"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['jugador_id']->Posicion($v['jugador_id']->posicion)}}</font></td>
                        <td class="team-roster-table__age"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['jugador_id']['fecha_nacimiento']}}</font></a></td>
                        <td class="team-roster-table__height"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['jugador_id']['altura']}}</font></a></td>
                      </tr>
                    @endforeach --}}
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

                     @foreach($jugadores as $k)
                      @if($k->fecha_hasta != 'actual' && $k->borrado == 0)
                        <tr>
                          <td class="team-roster-table__number">
                            <figure class="team-meta__logo">
                              <a href="{{route('jugador',$k->Jugador->id)}}"><img src="uploads/jugadores/{{$k->Jugador->Foto}}" alt=""></a>
                            </figure>
                          </td>
                          <td class="team-roster-table__number">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->nro}}</font></a>
                          </td> 
                          <td class="team-roster-table__name">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->apellido}} {{$k->Jugador->nombre}}</font></a><br>
                             <label class="label label-default">hasta {{$k->fecha_hasta}}</label>
                          </td>
                          <td class="team-roster-table__position hidden-xs hidden-sm">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->Posicion($k->Jugador->posicion)}}</font>
                          </td>
                          <td class="team-roster-table__age">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->fecha_nacimiento}}</font></a>
                          </td>
                          <td class="team-roster-table__height">
                            <a href="{{route('jugador',$k->Jugador->id)}}"><font color="#000000">{{$k->Jugador->altura}}</font></a>
                          </td>  
                        </tr>
                      @endif
                    @endforeach

                      {{--  @foreach($jugadores_baja as $ex_jugador)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="{{route('jugador',$v['jugador_id']['id'])}}"><img src="uploads/jugadores/{{$ex_jugador['jugador_id']['foto']}}" alt=""></a>
                            </figure></td>
                        <td class="team-roster-table__number"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$ex_jugador['buena_fe']['nro']}}</font></a></td>    
                        <td class="team-roster-table__name"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$ex_jugador['jugador_id']['apellido']}} {{$ex_jugador['jugador_id']['nombre']}}
                        @if($v['buena_fe']['hasta'] != '0000-00-00')
                                <p>hasta {{$v['buena_fe']['hasta']}}</p>
                        @endif  
                        </font></a></td>
                        <td class="team-roster-table__position hidden-xs hidden-sm"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$v['jugador_id']->Posicion($v['jugador_id']->posicion)}}</font></a></td>
                        <td class="team-roster-table__age"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$ex_jugador['jugador_id']['fecha_nacimiento']}}</font></a></td>
                        <td class="team-roster-table__height"><a href="{{route('jugador',$v['jugador_id']['id'])}}"><font color="#000000">{{$ex_jugador['jugador_id']['altura']}}</font></a></td>
                      </tr>
                      @endforeach --}}
                 
                      
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

                    @foreach($staffs as $k)
                      @if($k->fecha_hasta == 'actual' && $k->borrado == 0)
                        <tr>
                          <td class="team-roster-table__number">
                            <figure class="team-meta__logo">
                              <a href="{{route('detalle_staff',$k->Oficial->id)}}"><img src="uploads/jugadores/{{$k->Oficial->Foto}}" alt=""></a>
                            </figure>
                          </td>
                          <td class="team-roster-table__name">
                            <a href="{{route('detalle_staff',$k->Oficial->id)}}"><font color="#000000">{{$k->Oficial->apellido}} {{$k->Oficial->nombre}}</font></a>
                          </td>
                          <td class="team-roster-table__age">
                            <a href="{{route('detalle_staff',$k->Oficial->id)}}"><font color="#000000">{{$k->Oficial->Funcion->funcion}}</font>
                          </td>
                        </tr>
                      @endif
                    @endforeach


                       {{--  @foreach($staffs_actuales as $staff)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000"><img src="uploads/oficial/{{$staff['staff_id']['imagen']}}" alt=""></a>
                            </figure></td>   
                        <td class="team-roster-table__name"> <a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000">{{$staff['staff_id']['apellido']}} {{$staff['staff_id']['nombre']}}
                          @if($staff['buena_fe_staff']['fecha_desde'] != '0000-00-00')
                              <p>desde {{$staff['buena_fe_staff']['fecha_desde']}}</p>
                          @endif
                        </font></a></td>
                        <td class="team-roster-table__age"><a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000">{{$staff['buena_fe_staff']['funcion']->funcion}}</font></a></td>
                      </tr>
                      @endforeach --}}
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
                     @foreach($staffs as $k)
                      @if($k->fecha_hasta != 'actual' && $k->borrado == 0)
                        <tr>
                          <td class="team-roster-table__number">
                            <figure class="team-meta__logo">
                              <a href="{{route('detalle_staff',$k->Oficial->id)}}"><img src="uploads/jugadores/{{$k->Oficial->Foto}}" alt=""></a>
                            </figure>
                          </td>
                          <td class="team-roster-table__name">
                            <a href="{{route('detalle_staff',$k->Oficial->id)}}"><font color="#000000">{{$k->Oficial->apellido}} {{$k->Oficial->nombre}}</font></a><br>
                              <label class="label label-default">hasta {{$k->fecha_hasta}}</label>
                          </td>
                          <td class="team-roster-table__age">
                            <a href="{{route('detalle_staff',$k->Oficial->id)}}"><font color="#000000">{{$k->Oficial->Funcion->funcion}}</font>
                          </td>
                        </tr>
                      @endif
                    @endforeach

                     {{--  @foreach($staffs_baja as $ex_staff)
                      <tr>
                        <td class="team-roster-table__number"><figure class="team-meta__logo">
                              <a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000"><img src="uploads/oficial/{{$ex_staff['staff_id']['imagen']}}" alt=""></a>
                            </figure></td>   
                        <td class="team-roster-table__name"> <a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000">{{$ex_staff['staff_id']['apellido']}} {{$ex_staff['staff_id']['nombre']}}
                          @if($ex_staff['buena_fe_staff']['fecha_hasta'] != '0000-00-00')
                                <p>hasta {{$ex_staff['buena_fe_staff']['fecha_hasta']}}</p>
                          @endif
                        </font></a></td>
                        <td class="team-roster-table__age"><a href="{{route('detalle_staff',$staff['staff_id']['id'])}}"><font color="#000000">{{$ex_staff['buena_fe_staff']['funcion']->funcion}}</font></a></td>
                      </tr>
                      @endforeach --}}
                   
                      
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