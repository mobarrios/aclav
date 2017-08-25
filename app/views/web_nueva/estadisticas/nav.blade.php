   <nav class="content-filter">
          <div class="container">
            <a href="#" class="content-filter__toggle"></a>
            <ul class="content-filter__list">
              <li class="{{isset($sesion_individuales) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('individuales')}}" class="content-filter__link"><small>Estadisticas</small>Individuales</a></li>
              <li class="{{isset($sesion_porequipo) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('porequipo')}}" class="content-filter__link"><small>Estadisticas</small>por Equipo</a></li>
              <li class="{{isset($sesion_entreequipos) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('entreequipos')}}" class="content-filter__link"><small>Antecedentes</small>entre equipos</a></li>
              <li class="{{isset($sesion_jugador) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('jugadores')}}" class="content-filter__link"><small>Mejores</small>Jugadores</a></li>
              <li class="{{isset($sesion_curiosidades) ? 'content-filter__item--active' : 'content-filter__item' }} "><a href="{{route('curiosidades')}}" class="content-filter__link"><small></small>Curiosidades</a></li>
              <li class="{{isset($sesion_records) ? 'content-filter__item--active' : 'content-filter__item' }} "><a href="{{route('records')}}" class="content-filter__link"><small></small>Records</a></li>
            </ul>
          </div>
        </nav>