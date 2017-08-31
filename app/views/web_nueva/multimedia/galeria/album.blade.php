@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

        <!-- Gallery -->
        <div class="gallery row">

          @foreach($models as $imagen)
          <!-- style="height: 280px;" -->
          <div class="gallery__item col-xs-6 col-sm-3">
            <a href="uploads/contenidos/galeria/{{$imagen->GaleriaSub->Galeria->id}}/{{$imagen->GaleriaSub->id}}/{{$imagen->imagen}}" class="album__item-link mp_gallery">
              <figure class="gallery__thumb">
                <img src="uploads/contenidos/galeria/{{$imagen->GaleriaSub->Galeria->id}}/{{$imagen->GaleriaSub->id}}/{{$imagen->imagen}}" alt="">
                <span class="btn-fab gallery__btn-fab"></span>
              </figure>
              <div class="gallery__content card__content1">                
                <div class="gallery__details">
                  <h4 class="gallery__name"><p>Crédito: {{$imagen->owner}}</p></h4>                   
                </div>
              </div>
            </a>
          </div>
          @endforeach
        <!-- Gallery / End -->


        <div class="text-center">
          <!-- Team Pagination -->
          <nav class="team-pagination">
              {{$models->links()}}
          </nav>
          <!-- Team Pagination / End -->
          
        </div>
      </div>
  </div>    
@endsection