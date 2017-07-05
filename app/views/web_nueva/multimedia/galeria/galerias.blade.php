@extends('web_nueva.template')
@section('site-content')
  <div class="site-content">
      <div class="container">

        <!-- Gallery -->
        <div class="gallery row">

          @foreach($model as $galeria)
          <div class="gallery__item col-xs-6 col-sm-3">
            <a href="album.html">
              <figure class="gallery__thumb">
                <img src="assets/images/samples/post-img4.jpg" alt="">
                <span class="btn-fab gallery__btn-fab"></span>
              </figure>
              <div class="gallery__content card__content">
                <span class="gallery__icon">
                  <span class="icon-camera"></span>
                </span>
                <div class="gallery__details">
                  <h4 class="gallery__name"><p>Temporada 2016 - 2017</p></h4>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        <!-- Gallery / End -->


        <div class="text-center">
          <!-- Team Pagination -->
          
          <!-- Team Pagination / End -->
          
        </div>
      </div>
    </div>
</div>
@endsection