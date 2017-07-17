@extends('web_nueva.template')
@section('site-content')

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            
              <article class="card card--lg post post--single">
<br>
              <div class="video-container">
                    {{$model->object}}
              </div>


              <div class="card__content">
                
                <header class="post__header">
                  <h2 class="post__title"><p>{{$model->titulo}}</p></h2>
                  
                </header>
                <div class="post-author__info">
                          <h4 class="post-author__name"><p>Prensa ACLAV</p></h4>
                        </div>


                <div class="post__content">
                  <p><font size="3">Nicolas Lazo y Cristian Poglajen, dos hombres de Seleccion nacional que le aportan jerarquia a la Liga Argentina de Voleibol Banco Nacion, tambien estuvieron entre los puntos mas altos de la edicion que finalizo dias atras. Avanzando con la conformacion del Equipo Ideal de la temporada, surgen el sanjuanino de UPCN San Juan Voley Club y el olimpico de Lomas Voley, como los mejores en el rol de puntas receptores de todo el torneo.</font> 
                  </p>
  
              </div>
            </article>
            <!-- Article / End -->

            

            

          </div>
         <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
       
        </div>
        <!-- Video Slideshow / End -->

      </div>
    </div>

@endsection    