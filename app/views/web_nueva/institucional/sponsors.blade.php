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

              @foreach($model as $sponsor)
                <li class="posts__item card posts__item--category-1">
                  <div class="posts__inner card__content">
                    <h6 class="posts__title"><a href="#"><p>Nombre 1</p></a></h6>
                    <div class="posts__excerpt">
                      <div class="match-preview__match-place" align="center"> <img src="uploads/contenidos/sponsor/{{$sponsor->imagen}}" width="200" height="200"></div>
                    </div>
                  </div>
                </li>
              @endforeach
              
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