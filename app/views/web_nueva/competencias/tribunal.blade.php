@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <!-- Wishlist -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4>Tribunal de Disciplina</h4>
          </div>
          <div class="card__content">

            <div class="table-responsive">
              <table class="table shop-table">
                <thead>
                  <tr>
                    <th class="product__price"><font size="2"><p>Resolución</p></font></th>
                    <th class="product__price"><font size="2"><p>Jugador/Staff</p></font></th>
                    <th class="product__price"><font size="2"><p>Sanción</p></font></th>
                    <th class="product__price"><font size="2"><p>Cantidad de Fechas</p></font></th>
                  </tr>
                </thead>
                <tbody>

            @foreach ($model  as $models)
                  <tr>
                    <td class="product__info"><center>
                     <font size="2"><p>{{$models->resolucion}}</p></font></center>
                    </td>
                    <td class="product__info"><center>
                      <font size="2"><p>{{$models->jugador}}</p></font></center>
                    </td>
                    <td class="product__info">
                    <center>
                      {{$models->sancion}}
                    </td>
                    <td class="product__price">
                      <font size="2"><p>{{$models->cant_fecha}}</p></font>
                    
                  </tr>
                  
                @endforeach

                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- Wishlist / End -->
      </div>
    </div>
@endsection