  <h3 class="text-center">{{$torneo->nombre_torneo}}</h3>
  <nav class="content-filter">
    <div class="container">
    <a href="#" class="content-filter__toggle"></a>
      <ul class="content-filter__list">
      <li class="{{isset($sesion_calendario) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('calendario', Session::get('torneo_id'))}}" class="content-filter__link"><small></small>Calendario y Resultados</a></li>
      <li class="{{isset($sesion_posiciones) ? 'content-filter__item--active' : 'content-filter__item' }} "><a href="{{route('posiciones', Session::get('torneo_id'))}}" class="content-filter__link"><small></small>Posiciones</a></li>
      <li class="{{isset($sesion_tribunal) ? 'content-filter__item--active' : 'content-filter__item' }}"><a href="{{route('tribunal', Session::get('torneo_id'))}}" class="content-filter__link"><small></small>Tribunal</a></li>
      <li class="{{isset($sesion_formula) ? 'content-filter__item--active' : 'content-filter__item' }} "><a href="{{route('formula', Session::get('torneo_id'))}}" class="content-filter__link"><small></small>Formula de Juego</a></li>
      </ul>
    </div>
  </nav>