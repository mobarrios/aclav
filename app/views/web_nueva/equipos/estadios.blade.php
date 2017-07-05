@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">
              @foreach($model as $estadio)
              <div class="alert alert-info">
                <a href="estadio_1.html"><button type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Acceder</button></a>
                <strong>Aldo Cantoni</strong> 
              </div>
              @endforeach
            </div>
    
          </div>
          
           @include('web_nueva.template.sidebar')

        </div>

     </div>
   </div>

@endsection        