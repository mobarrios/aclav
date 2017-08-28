@extends('web_nueva.template')
@section('site-content')

<div class="site-content">
  <div class="container">

    @foreach($model as $staff)

    <div class="row shipping-details-row">


      @foreach($staff as $s)

      <div class="col-md-4">
      <!-- Cart Totals -->
      <div class="card card--has-table">
      <div class="card__header">
      <h4><p>{{$s['nombre']}} {{$s['apellido']}} </p></h4>
      </div>
      <div class="card__content">
      <!-- Checkout Review Order -->
      <div class="df-checkout-review-order">
        <div class="table-responsive"><br>
        <div class="match-preview__match-place" align="center"><img src="uploads/contenidos/staff/{{$s['imagen']}}" alt=""></div>
          <table class="df-checkout-review-order-table table">
            <tfoot>                        
              <tr class="amount">
                <th><p>Email</p></th>
                <td>
                  <span class="amount">
                    <span class="df-Price-currencySymbol"><a href="#"> <font size="3" color="#000000"><p>{{$s['email']}}</p></font></a></span>
                  </span>
                </td>
              </tr>
              <tr class="coupon">
                <th><p>Teléfono</p></th>
                <td>                            
                    <p><font size="2" color="#333">{{$s['tel']}}</p>                            
                </td>
              </tr>
              
            </tfoot>
          </table>
        </div>
      </div>
      <!-- Checkout Review Order / End -->

      <!-- Checkout Payment -->
      <div class="df-checkout-payment">
        <div class="form-row place-order">
          <center><h4><p>{{$s['cargo']}}</p></h4></center>
        </div>
      </div>
      <!-- Checkout Payment / End -->

      </div>
      </div>
      <!-- Cart Totals / End -->
      </div>
      @endforeach

    </div>
    @endforeach
  </div>

</div>

@endsection