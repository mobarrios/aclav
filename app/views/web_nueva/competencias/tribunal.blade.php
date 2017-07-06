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
                    <th class="product__price"><font size="2"><p>Motivo</p></font></th>
                    <th class="product__price"><font size="2"><p>Jugador/Staff</p></font></th>
                    <th class="product__price"><font size="2"><p>Sanción</p></font></th>
                    <th class="product__price"><font size="2"><p>Cantidad de Fechas</p></font></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product__info"><center>
                     <font size="2"><p>Expulsión</p></font></center>
                    </td>
                    <td class="product__info"><center>
                      <font size="2"><p>Javier FILARDI [UPCN SAN JUAN VOLEY CLUB]</p></font></center>
                    </td>
                    <td class="product__info"><center>
                      <font size="2"><p>Castigo (Tarjeta Roja) en el 2do set (marcador 5-5) al jugador n° 14 Javier Filardi, de UPCN San Juan Voley Club. 07/04/2017, partido # 142 Personal Bolivar vs UPCN San JUan Voley Club, Final 2 de la Liga Argentina de Voleibol.
<br>
Expulsión en el 3° set (marcador 27-25) al jugador n° 14 Javier Filardi, de UPCN San Juan Voley Club. 07/04/2017, partido # 142 Personal Bolivar vs UPCN San Juan Voley Club, Final 2 de la Liga Argentina de Voleibol.</p></font></center>
                    </td>
                    <td class="product__price">
                      <font size="2"><p>Castigos Acumulados: 2 (dos)</p></font>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- Wishlist / End -->
      </div>
    </div>
@endsection