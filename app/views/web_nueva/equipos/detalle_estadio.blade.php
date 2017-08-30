@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <div class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  <h5 class="posts__title"><p>{{$models->nombre}}</p></h5>
                </div>
            </div>

            <!-- Search Results -->
            <ul class="posts posts--simple-list posts--simple-list--search">
              <li class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  
                  <h6 class="posts__title"><p>Direccion: {{$models->direccion}}</p></h6>
                  <h6 class="posts__title"><p>Ciudad: {{$models->ciudad}}</p></h6>
                  <h6 class="posts__title"><p>Provincia: {{$models->provincia}}</h6>
                  <h6 class="posts__title"><p>Telefono: {{$models->telefono}}</p></h6>
                  <h6 class="posts__title"><p>Capacidad: {{$models->capacidad}}</p></h6>

                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                  {{$models->mapa}}
                  
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Imagenes del Estadio</a></p></h6>
                  <div class="posts__excerpt">
                    <div class="album__item col-xs-6 col-sm-4">
			            <center><div class="album__item-holder">
			              <a href="uploads/estadio/{{$models->imagen}}" class="album__item-link mp_gallery">
			                <figure class="album__thumb">
			                  <img src="uploads/estadio/{{$models->imagen}}" alt="">
			                </figure>
			                
			              </a>
			              
			            </div>
			          </div>
          <div class="album__item col-xs-6 col-sm-4">
            <div class="album__item-holder">
              <a href="uploads/estadio/{{$models->imagen1}}" class="album__item-link mp_gallery">
                <figure class="album__thumb">
                  <img src="uploads/estadio/{{$models->imagen1}}" alt="">
                </figure>
                
              </a>
              
            </div>
          </div>
          <div class="album__item col-xs-6 col-sm-4">
            <div class="album__item-holder">
              <a href="uploads/estadio/{{$models->imagen2}}" class="album__item-link mp_gallery">
                <figure class="album__thumb">
                  <img src="uploads/estadio/{{$models->imagen2}}" alt="">
                </figure>
                
              </a>
              
            </div>
          </div>
          <div class="album__item col-xs-6 col-sm-4">
            <div class="album__item-holder">
              <a href="uploads/estadio/{{$models->imagen3}}" class="album__item-link mp_gallery">
                <figure class="album__thumb">
                  <img src="uploads/estadio/{{$models->imagen3}}" alt="">
                </figure>
                
              </a>
              
            </div>
          </div>
          <div class="album__item col-xs-6 col-sm-4">
            <div class="album__item-holder">
              <a href="uploads/estadio/{{$models->imagen4}}" class="album__item-link mp_gallery">
                <figure class="album__thumb">
                  <img src="uploads/estadio/{{$models->imagen4}}" alt="">
                </figure>
                
              </a>
              
            </div>
          </div>
          </center>
      </div>
    </div>
  </li>
  
            </ul>
            <!-- Search Results / End -->


            

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
        </div>

        <!-- Video Slideshow -->
        
            <!-- Carousel / End -->

          </div>
        </div>
        <!-- Video Slideshow / End -->

      </div>
    </div>
@endsection   