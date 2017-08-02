@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">

              @foreach($model as $archivo)
              <div class="alert alert-success">
                <a href="uploads/contenidos/archivo/{{$archivo->archivo}}" download type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Descargar</a>
                <strong>{{$archivo->titulo}}</strong> 
              </div>
              @endforeach
          

            </div>
         
          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
        </div>

      </div>
</div>
    

@endsection    