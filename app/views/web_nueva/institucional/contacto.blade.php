@extends('web_nueva.template')

@section('site-content')
<div class="site-content1">
      <div class="container">
          @if(Session::has('msg'))
          <div class="row">
               <div class="col-xs-12">
                 <div class="alert alert-success">
                  <strong>Mensaje enviado con éxito.</strong>
                </div>
               </div>
          </div>
          @endif
          <div class="row">

          <!-- Content -->
          <div class="content col-md-12">
            <!-- inicio Encabezado -->
            <div class="card1">
              <header class="card__header card__header--has-btn">
                <h4>Contactanos</h4>                
              </header>                     
            </div>
            <!-- fin Encabezado -->
            
            <!-- Inicio de una fecha -->
            <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->               
<div class="card__content">
            <div class="row">
              <div class="col-md-4">
                <h5><p>Telefono: </p></h5>
                <p>{{$model->telefono}}</p>
                <div class="spacer-sm"></div>
                <h5><p>Direccion:</p></h5>
                <p>{{$model->direccion}}</p>
                <h5><p>Email de Contacto:</p></h5>
                <p><a href="mailto:info@aclav.com"><font color="#000000">{{$model->email}}</font></a></p>
              </div>

              <div class="col-md-8">
                {{$model->mapa}}
              </div>
            </div>
          </div>                   
        <!-- Contact Area / End -->               
        </div>
            </div>              
    <!-- fin formulario -->

<hr>
           

                  </section>
                  </div>
                </div>
            </div>
            <!-- Game Scoreboard / End -->
 <br>         
          </div>
        </div>
      </div>
    </div>
    
@endsection