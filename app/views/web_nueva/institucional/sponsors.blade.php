@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <div class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Acompañan el desarrollo de la liga las siguientes marcas:</p></a></h6>
                  
                </div>
              </div>

            <!-- Search Results -->
            <ul class="posts posts--simple-list posts--simple-list--search">
              <li class="posts__item card posts__item--category-2">
                <div class="posts__inner card__content">
                  
                  <h6 class="posts__title"><a href="#"><p>Main Sponsors</p></a></h6>
                  @foreach(Sponsor::where('estado','=',2)->get() as $auspiciantes)
                       <div class="posts__excerpt">
                              <div class="match-preview__match-place" align="center">
                              <a href="{{$auspiciantes->url}}" target="_blank"><img src="uploads/contenidos/sponsor/{{$auspiciantes->imagen}}" width="200" height="200"></a></div>

                            </div>
                  @endforeach
                  
                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Sponsors Oficiales</p></a></h6>
                  <div class="posts__excerpt">

                     @foreach(array_chunk(Sponsor::where('estado','=',1)->get()->toArray(), 3) as $oficial)
                    
                     <div class="match-preview__match-place" align="center"> 
                          @foreach($oficial as $o)
                           <a href="{{$o['url']}}" target="_blank"> <img src="uploads/contenidos/sponsor/{{$o['imagen']}}" width="200" height="200"></a>
                          @endforeach
                     </div>
                     @endforeach
                   


                  </div>
                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Sponsor Técnico</p></a></h6>
                  <div class="posts__excerpt">
                  @foreach(Sponsor::where('estado','=',3)->get() as $media)
                    <div class="match-preview__match-place" align="center"> 
                     <a href="{{$media->url}}" target="_blank"> <img src="uploads/contenidos/sponsor/{{$media->imagen}}" width="200" height="200">

                    </a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Media Sponsor</p></a></h6>
                  <div class="posts__excerpt">
                   @foreach(Sponsor::where('estado','=',4)->get() as $media)
                    <div class="match-preview__match-place" align="center"><a href="{{$media->url}}" target="_blank"> <img src="uploads/contenidos/sponsor/{{$media->imagen}}" width="200" height="200"></a></div>

                   @endforeach 
                  </div>
                </div>
              </li>
              <li class="posts__item card posts__item--category-1">
                <div class="posts__inner card__content">
                  <h6 class="posts__title"><a href="#"><p>Auspiciantes</p></a></h6>
                  <div class="posts__excerpt">
                  @foreach(Sponsor::where('estado','=',0)->get() as $main)
                 
                    <div class="match-preview__match-place" align="center"><a href="{{$main->url}}" target="_blank"> <img src="uploads/contenidos/sponsor/{{$main->imagen}}" width="200" height="200"></a></div>

                  @endforeach  
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

   

          </div>
        </div>
    

@endsection