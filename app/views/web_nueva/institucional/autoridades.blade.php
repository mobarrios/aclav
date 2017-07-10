@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        @foreach($model as $autoridades)
         <div class="row shipping-details-row">
         @foreach($autoridades as $a)
          <div class="col-md-4">
            <!-- Shipping Calculation -->
           <div class="card card--has-table">
              <div class="card__header">
                <h4><p>{{$a['nombre']}} {{$a['apellido']}}</p></h4>
              </div>
              <div class="card__content">

                <!-- Checkout Review Order -->
                <div class="df-checkout-review-order">
                  <div class="table-responsive"><br>
                  <div class="match-preview__match-place" align="center"><img src="uploads/contenidos/autoridad/{{$a['imagen']}}"></div>
                    <table align="center" class="df-checkout-review-order-table table">
                      <tfoot>                        
                        <tr class="shipping" align="center">
                          <th><h5><p align="center">{{$a['club_actual']}}</p></h5></th>                          
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <!-- Checkout Review Order / End -->

                <!-- Checkout Payment -->
                <div class="df-checkout-payment">
                  <div class="form-row place-order">
                    <center><h4><p>{{$a['cargo']}}</p></h4></center>
                  </div>
                </div>
                <!-- Checkout Payment / End -->

              </div>
            </div>
            <!-- Shipping Calculation / End -->
          </div>
          @endforeach
          

        </div>
        @endforeach
        <!-- Shipping Details / End -->

      </div>
    </div>
@endsection    