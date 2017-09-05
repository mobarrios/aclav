@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <div class="row">

          <!-- Content -->
          <div class="content col-md-12">

            <!-- Game Scoreboard -->
            <div class="card">
              <header class="card__header card__header--has-btn">
                <h4><p>Fórmula de juego - {{$torneo->nombre_torneo}}</p></h4>
                
              </header>
              <div class="card__content">
            
                <!-- Game Result -->
                <div class="game-result">
                  <section class="game-result__section">
                    <header class="game-result__header">
                      <div class="match-preview__match-place" align="center">
                        <img src="uploads/contenidos/formulacopa{{$formula->letra}}/{{$formula->imagen}}" alt="">
                      </div>
                    </header>
                    <div class="game-result__content">          
                      <!-- 2nd Team / End -->
                    </div>
                   
                        
                  <div style="text-align: justify-all; font-size:3"> 
                    {{$formula->cuerpo}}
                  </div>
        </div>

      </div>
    </div>
    </div>
    </div></div>
    </div>

@endsection
