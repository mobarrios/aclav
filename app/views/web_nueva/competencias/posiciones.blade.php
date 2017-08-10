@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <!-- Team Standings -->
        @foreach($fases as $fase)
        @if($fase->tipo_fase_id == 1)
        <div class="card card--has-table">
          <div class="card__header">
            <h4>{{$fase->nombre}}</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover table-standings table-standings--full">
                <thead>
                  <tr bgcolor="#ccc">
                    <th rowspan="2" class="team-standings__pos"></th>
                    <th rowspan="2" class="team-standings__win"></th>
                    <th rowspan="2" class="team-standings__team"></th>
                    <th rowspan="2" class="team-standings__win"></th>
                    <th rowspan="3" class="team-standings__lose"></th>
                    <th rowspan="3" class="team-standings__pct">Partidos</th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="2" class="team-standings__home">Sets</th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="2" class="team-standings__home">Tantos</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th class="team-standings__road"></th>
                    <th class="team-standings__div"">Racha</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th rowspan="2" class="team-standings__pos">Rank</th>
                    <th rowspan="2" class="team-standings__win">Cod</th>
                    <th rowspan="2" class="team-standings__team">Equipo</th>
                    <th rowspan="2" class="team-standings__win">Pts</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Tot</th>
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Coef</th>
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Coef</th>
                    <th class="team-standings__strk"></th>
                  </tr>

                  
                </thead>
                <tbody>
                  @foreach($fase->TablaPosicion as $tabla)
                  @if($tabla->equipo_id != 15)
                  <tr>
                    <td class="team-standings__pos"><?php echo $count ?></td>
                    <td class="team-standings__win ">{{$tabla->Equipo->sigla}}</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="uploads/escudos/{{$tabla->Equipo->escudo}}" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name"> {{$tabla->Equipo->nombre}}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">{{$tabla->puntos}}</span></td>
                    <td class="team-standings__lose">{{$tabla->partido_ganado}}</td>
                    <td class="team-standings__pct">{{$tabla->partido_perdido}}</td>
                    <td class="team-standings__gb">{{$tabla->partido_total}}</td>
                    <td class="team-standings__home">{{$tabla->set_ganado}}</td>
                    <td class="team-standings__road">{{$tabla->set_perdido}}</td>
                    <td class="team-standings__div">
                    @if($tabla->set_coeficiente == '1000')
                      max.
                    @else
                       {{$tabla->set_coeficiente}}
                    @endif
                    </td>
                    <td class="team-standings__ppg">{{$tabla->punto_ganado}}</td>
                    <td class="team-standings__op-ppg">{{$tabla->punto_perdido}}</td>
                    <td class="team-standings__diff">{{$tabla->punto_coeficiente}}</td>
                    <td class="team-standings__strk">{{$tabla->racha}}</td>
                  </tr>
                  <?php $count = $count + 1 ?>
                  @endif
                  @endforeach
                  <?php $count = '1'?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endif
        <!-- Team Standings / End -->
        @endforeach
        

      </div>
    </div>
@endsection