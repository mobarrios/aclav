@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <div class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  <h6 class="posts__title">{{$models->nombre}}</h6>
                </div>
            </div>

            <!-- Search Results -->
            <ul class="posts posts--simple-list posts--simple-list--search">
              <li class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  
                  <h6 class="posts__title">Direccion: {{$models->direccion}}</h6><p>
                  <h6 class="posts__title">Ciudad: {{$models->ciudad}}</h6><p>
                  <h6 class="posts__title">Provincia: {{$models->provincia}}</h6><p>
                  <h6 class="posts__title">Telefono: {{$models->telefono}}</h6><p>
                  <h6 class="posts__title">Capacidad: {{$models->capacidad}}</h6>

                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                
                  <iframe src="{{$models->mapa}}" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#">Imagenes del Estadio</a></h6>
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