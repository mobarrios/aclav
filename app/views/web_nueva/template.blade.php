<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <title>ACLAV - Asociación de Clubes Liga Argentina de Voleibol</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Asociación de Clubes Liga Argentina de Voleibol">
  <meta name="author" content="ACLAV">
  <meta name="keywords" content="Asociación de Clubes Liga Argentina de Voleibol">

  <!-- Favicons
  ================================================== -->
  <base href="{{ asset('')}}">
  <link rel="shortcut icon" href="assets/webnueva/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/webnueva/images/favicons/favicon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/webnueva/images/favicons/favicon-152.png">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

  <!-- Google Web Fonts
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

  <!-- CSS
  ================================================== -->
  <!-- Preloader CSS -->

  <!-- Estilos Videos-->
  
  
  <link href="assets/webnueva/css/preloader.css" rel="stylesheet">

  <!-- Estilos Videos-->
  <script src="assets/webnueva/sliderengine/jquery.js"></script>
  <script src="assets/webnueva/sliderengine/amazingslider.js"></script>
  <script src="assets/webnueva/sliderengine/initslider-1.js"></script>
  <link href="assets/webnueva/css/rvslider.min.css" rel="stylesheet">
  <link   rel="stylesheet" type="text/css" href="assets/webnueva/sliderengine/amazingslider-1.css">

  <!-- Vendor CSS -->
  <link href="assets/webnueva/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/webnueva/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/webnueva/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="assets/webnueva/vendor/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
  <link href="assets/webnueva/vendor/slick/slick.css" rel="stylesheet">



  <!-- Template CSS-->
  <link href="assets/webnueva/css/content.css" rel="stylesheet">
  <link href="assets/webnueva/css/components.css" rel="stylesheet">
  <link href="assets/webnueva/css/style.css" rel="stylesheet">

  
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/webnueva/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/webnueva/css/owl.theme.default.min.css">

  <!-- Custom CSS-->
  <link href="assets/webnueva/css/custom.css" rel="stylesheet">
  <link href="assets/webnueva/css/carousel.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  @yield('css')

</head>
<body class="template-voleibol">

  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    <!-- Header
    ================================================== -->
  
    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
      <div class="header-mobile__inner">
      <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
       </div>
      <div class="header-mobile__logo">
        <a href="{{route('inicio')}}"><img src="assets/webnueva/images/logo.png" srcset="assets/webnueva/images/logo@2x.png 2x" alt="ACLAV" class="header-mobile__logo-img"></a>
        
      </div>
    </div>
  
    <!-- Header Desktop -->
    @include('web_nueva.template.header')
    <!-- Header / End -->
  
    <!-- Pushy Panel -->
    <aside class="pushy-panel">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.html"><img src="assets/webnueva/images/logo.png" srcset="assets/webnueva/images/logo@2x.png 2x"></a>
          </div>
        </header>
       
      </div>
    </aside>
    

          
          
    <!-- Content
    ================================================== -->
    @yield('site-content')
  
    
    <!-- Content / End -->    

     <!-- Footer
    ================================================== -->

   @include('web_nueva.template.footer')
    <!-- Footer / End --> 
    
    
    
  </div>

  <!-- Javascript Files
  ================================================== -->
  <!-- Core JS -->
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
  <script
        src="http://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
  <!-- Responsive Video Slider JS -->
  <script src="assets/webnueva/js/rvslider.min.js"></script>
  <script>

    jQuery(function($){
      $('.rvs-container').rvslider();
    });

    $('.fase').on('click',function(){

        var id = $(this).attr('data-id');

        $('.weeks').css("display","none");
        $('.card'+id).removeAttr("style");


    });
  </script>

  <!-- Javascript Files
  ================================================== -->

<!-- Estilos Videos-->
  <script src="assets/webnueva/sliderengine/jquery.js"></script>
  <script src="assets/webnueva/sliderengine/amazingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/webnueva/sliderengine/amazingslider-1.css">
  <script src="assets/webnueva/liderengine/initslider-1.js"></script>

  <!-- Core JS -->
  <script src="assets/webnueva/vendor/jquery/jquery.min.js"></script>
  <script src="assets/webnueva/js/core-min.js"></script>
  
  <!-- Vendor JS -->
  <script src="assets/webnueva/vendor/twitter/jquery.twitter.js"></script>
  
  
  <!-- Template JS -->
  <script src="assets/webnueva/js/init.js"></script>
  <script src="assets/webnueva/js/custom.js"></script>
  <script src="assets/webnueva/js/carousel.js"></script>
  
  <!-- Owl Carousel -->
  <script src="assets/webnueva/js/owl.carousel.min.js"></script>

    <script>
      $(document).ready(function(){

      start = {{ (isset($resultados) )? $resultados->count() : 0 }};
     



       $('.owl-carousel').owlCarousel({

          startPosition : start,
          loop:false,
          margin: 15,
          autoHeight:true,
          stagePadding: 15,
          nav: true,
          navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
   
          responsive:{
          0:{
              items:1
          },
          920:{
              items:2   
          },
          1200:{
              items:6
          },                

       }
  })
   });
  </script>
  @yield('javascript')
  </body>
  </html>