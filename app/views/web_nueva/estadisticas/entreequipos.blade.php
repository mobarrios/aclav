@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

      <!-- Team Pages Filter -->
     @include('web_nueva.estadisticas.nav')
      <!-- Team Pages Filter / End -->

        <iframe src="http://aclavstats.matchshare.it/statistics.php?&type=compareteams&loc=es_ES.utf8" width="100%" height="1200" scrolling="yes" frameborder="0"></iframe>

       
        <!-- Team Glossary / End -->

      </div>
</div>
@endsection