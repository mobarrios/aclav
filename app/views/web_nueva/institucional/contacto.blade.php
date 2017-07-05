@extends('web_nueva.template')

@section('site-content')
<div class="site-content1">
      <div class="container">
        

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
                <p>+54 9 11 4783-5010</p>
                <div class="spacer-sm"></div>
                <h5><p>Direccion:</p></h5>
                <p>Echeverria 1444, Entre Piso, Oficina 40 - Ciudad Autonoma de Buenos Aires</p>
                <h5><p>Email de Contacto:</p></h5>
                <p><a href="mailto:info@aclav.com"><font color="#000000">info@aclav.com</font></a></p>
              </div>

              <div class="col-md-8">
                <!-- Contact Form -->
                <form action="#" class="contact-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="contact-form-name"><p>Su Nombre <span class="required">*</span></p></label>
                        <input type="text" name="contact-form-name" id="contact-form-name" class="form-control" placeholder="Nombre...">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="contact-form-email"><p>Su Email <span class="required">*</p></span></label>
                        <input type="email" name="contact-form-email" id="contact-form-email" class="form-control" placeholder="Email...">
                      </div>
                    </div>                    
                  </div>
                  <div class="form-group">
                    <label for="contact-form-message"><p>Comentario <span class="required">*</p></span></label>
                    <textarea name="name" rows="5" class="form-control" placeholder="Ingresa tu comentario aqui..."></textarea>
                  </div>
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn">Envia tu mensaje</button>
                  </div>
                </form>
                <!-- Contact Form / End -->
              </div>
            </div>
          </div>                   
        <!-- Contact Area / End -->               
        </div>
            </div>              
    <!-- fin formulario -->

<hr>
           
<!-- Inicio Mapa -->
      <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13143.411233036815!2d-58.45267499999999!3d-34.557282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5cca3cde53f%3A0x784b4e50df27f094!2sEcheverr%C3%ADa+1444%2C+C1428DQS+CABA%2C+Argentina!5e0!3m2!1ses!2sar!4v1496851092604" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>  
        </div>
            </div>              
<!-- fin mapa -->  
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