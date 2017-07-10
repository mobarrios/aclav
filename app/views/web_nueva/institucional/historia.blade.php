@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Article -->
            <article class="card card--lg post post--single">
        
              <div class="card__content">
                <header class="post__header">
                  <h2 class="post__title"><p>Historia de la ACLAV</p></h2>
                </header>
                <div class="post__content">
                  <p><font size="3">{{$model->cuerpo}} </font>
                  </p>
                </div>
              </div>

            </article>
             

        </div>
         <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
      </div>

    </div>
</div>

@endsection