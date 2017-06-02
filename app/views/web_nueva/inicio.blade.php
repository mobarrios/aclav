@extends('web_nueva.template')
@section('content')
 <aside class="pushy-panel">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.html"><img src="assets/webnueva/images/logo.png" srcset="assets/webnueva/images/logo@2x.png 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">
    
          <!-- Widget: Posts -->
          <aside class="widget widget--side-panel">
            <div class="widget__content">
              <ul class="posts posts--simple-list posts--simple-list--lg">
                <li class="posts__item posts__item--category-1">
                  <div class="posts__inner">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">The Team....</span>
                    </div>
                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                    <time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
                    <div class="posts__excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                    </div>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/webnueva/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">James Spiegel</h4>
                      </div>
                    </div>
                    <ul class="post__meta meta">
                      <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                      <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                    </ul>
                  </footer>
                </li>
                <li class="posts__item posts__item--category-2">
                  <div class="posts__inner">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">Injuries</span>
                    </div>
                    <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
                    <time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
                    <div class="posts__excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                    </div>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/webnueva/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Jessica Hoops</h4>
                      </div>
                    </div>
                    <ul class="post__meta meta">
                      <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                      <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                    </ul>
                  </footer>
                </li>
              </ul>
            </div>
          </aside>
          <!-- Widget: Posts / End -->
    
          <!-- Widget: Tag Cloud -->
          <aside class="widget widget--side-panel widget-tagcloud">
            <div class="widget__title">
              <h4>Tag Cloud</h4>
            </div>
            <div class="widget__content">
              <div class="tagcloud">
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
              </div>
            </div>
          </aside>
          <!-- Widget: Tag Cloud / End -->
    
          <!-- Widget: Banner -->
          <aside class="widget widget--side-panel widget-banner">
            <div class="widget__content">
              <figure class="widget-banner__img">
                <a href="#"><img src="assets/webnueva/images/samples/banner.jpg" alt="Banner"></a>
              </figure>
            </div>
          </aside>
          <!-- Widget: Banner / End -->
    
        </div>
        <a href="#" class="pushy-panel__back-btn"></a>
      </div>
    </aside>




<div class="slick posts posts-slider posts--slider-top-news" ng-controller="inicioController">
  
    <!-- Slide #1 -->
    <div class="slick__slide">
  
      <div class="posts__item posts__item-has-img posts__item--category-1">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="assets/webnueva/images/samples/hero-slide1.jpg" alt="" class="duotone-img" data-gradient-map="#282840, #f92552">
        </figure>
        <!-- Main Image / End -->
  
        <!-- Player Image -->
        <div class="posts__img-player">
          <img src="assets/webnueva/images/samples/hero-unit-player.png'))}}" alt="Hero Unit Image">
        </div>
        <!-- Player Image / End -->
  
        <!-- Post Content -->
        <div class="posts__inner">
          
          <h3 class="posts__title"><a href="detalle_noticia.html"><font color="#ffffff">@{{datos[0].noticias['titulo']}}</font></a></h3>
          
        </div>
        <!-- Post Content / End -->
  
      </div>
  
    </div>
    <!-- Slide #1 / End -->
  
  
    <!-- Slide #2 -->
    <div class="slick__slide">
  
      <div class="posts__item posts__item--category-2">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="assets/webnueva/images/samples/hero-slide2.jpg" alt="" class="duotone-img" data-gradient-map="#282840, #9e69ee">
        </figure>
        <!-- Main Image / End -->
  
        <!-- Post Content -->
        <div class="posts__inner">
          
          <h3 class="posts__title"><a href="detalle_noticia.html"><font color="#ffffff">@{{datos[1].noticias['titulo']}}</font></a></h3>
          
        </div>
        <!-- Post Content / End -->
  
      </div>
  
    </div>
    <!-- Slide #2 / End -->
  
  
    <!-- Slide #3 -->
    <div class="slick__slide">
  
      <div class="posts__item posts__item--category-1">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="assets/webnueva/images/samples/hero-slide3.jpg" alt="" class="duotone-img" data-gradient-map="#282840, #f92552">
        </figure>
        <!-- Main Image / End -->
  
        <!-- Post Content -->
        <div class="posts__inner">
          
          <h3 class="posts__title"><a href="detalle_noticia.html"><font color="#ffffff">@{{datos[2].noticias['titulo']}}</font></a></h3>
          <footer class="posts__footer">
            
              
            
          </footer>
        </div>
        <!-- Post Content / End -->
  
      </div>
  
    </div>
    <!-- Slide #3 / End -->
  
  
    <!-- Slide #4 -->
    <div class="slick__slide">
  
      <div class="posts__item posts__item--category-3">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="assets/webnueva/images/samples/hero-slide4.jpg" alt="" class="duotone-img" data-gradient-map="#282840, #0fe3ab">
        </figure>
        <!-- Main Image / End -->
  
        <!-- Post Content -->
        <div class="posts__inner">
          
          <h3 class="posts__title"><a href="detalle_noticia.html"><font color="#ffffff">@{{datos[3].noticias['titulo']}}</font></a></h3>
          <footer class="posts__footer">
           
            
          </footer>
        </div>
        <!-- Post Content / End -->
  
      </div>
  
    </div>
    <!-- Slide #4 / End -->
  
  </div>

      <div class="site-content">
      <div class="container">

        <div class="team-roster team-roster--case team-roster--case-slider">
<!-- Resultado Final -->

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                          <img src="assets/webnueva/images/samples/logos/001.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Personal Bolívar</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">3 - 1</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                          <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Ciudad Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">UPCN San Juan Voley</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">3 - 2</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Lomas Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Gigantes del Sur</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">4 - 1</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Obras UDAP Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Alianza Jesús María</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">3 - 1</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">River Plate</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Deportivo Morón</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">4 - 1</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Untref Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Resultado de la Fecha</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>

                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">PSM Voley</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">3 - 2</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Ciudad Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>


          
          <!-- Fin Proxima Fecha -->

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <h5 class="widget-results__title">Punto a Punto</h5>
              <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Personal Bolívar</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">10</span>
                          
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">17</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">19</span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">11</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">20</span>
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Ciudad Voley</h5>
                        </div>
                      </div>
                    </div>
              

            </div>
          </div>
          <!-- Player / End -->


          <!-- Player -->
          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <h5 class="widget-results__title">Punto a Punto</h5>
              <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">UPCN San Juan</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">10</span>
                          
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">17</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">19</span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">11</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">20</span>
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Lomas Voley</h5>
                        </div>
                      </div>
                    </div>
              

            </div>
          </div>
          <!-- Player / End -->


          <!-- Player -->
          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <h5 class="widget-results__title">Punto a Punto</h5>
              <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Gigantes del Sur</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">10</span>
                          
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">17</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">19</span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">11</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">20</span>
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Obras UDAP Voley</h5>
                        </div>
                      </div>
                    </div>
              

            </div>
          </div>
          <!-- Player / End -->


          <!-- Player -->
          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <h5 class="widget-results__title">Punto a Punto</h5>
              <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Alianza Jesús María</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">10</span>
                          
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">17</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">19</span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total">11</span> - <span class="team-leader__total"><b>25</b></span>
                        </div>
                        <div class="widget-results__score">
                          <span class="team-leader__total"><b>25</b></span> - <span class="team-leader__total">20</span>
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">River Plate</h5>
                        </div>
                      </div>
                    </div>
              

            </div>
          </div>
          <!-- Proxima Fecha -->

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Personal Bolívar</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Ciudad Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                          <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">UPCN San Juan Voley</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Lomas Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Gigantes del Sur</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Obras UDAP Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Alianza Jesús María</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">River Plate</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Deportivo Morón</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Untref Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>

          <div class="team-roster__item card card--no-paddings">
            <div class="card__content">

              <!-- Player Photo -->
              <div class="widget-results__item">
                    <h5 class="widget-results__title">Sabado, Mayo 24</h5>
                    <h5 class="widget-results__title"></h5>
                    <div class="widget-results__content">
                      <div class="widget-results__team widget-results__team--first">
                        <figure class="widget-results__team-logo">
                           <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">PSM Voley</h5>
                        </div>
                      </div>
                      <div class="widget-results__result">
                        <div class="widget-results__score">
                          <span class="team-leader__total">vs</span> 
                        </div>
                      </div>
                      <div class="widget-results__team widget-results__team--second">
                        <figure class="widget-results__team-logo">
                            <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="widget-results__team-details">
                          <h5 class="widget-results__team-name">Ciudad Voley</h5>
                        </div>
                      </div>
                    </div>
                    <h5 class="widget-results__title"></h5>
                  </div>
              

            </div>
          </div>


          
          <!-- Fin Proxima Fecha -->



        </div>

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">
                
              
            <!-- Featured News -->
            <div class="card card--clean">
              <h4><img src="assets/webnueva/images/samples/bna.gif"></h4>
              <div class="card__content">

                <!-- Slider -->
                
                <!-- Slider / End -->

              </div>
            </div>
            <!-- Featured News / End -->


            <!-- Post Area 1 -->
            <div class="posts posts--cards post-grid row">

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="detalle_noticia.html"><img src="assets/webnueva/images/samples/post-img6.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2016-08-23" class="posts__date">Abril 06, 2017</time>
                    <h6 class="posts__title"><a href="detalle_noticia.html">@{{datos[4].noticias['titulo']}}</a></h6>
                    
                  </div>
                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="detalle_noticia.html"><img src="assets/webnueva/images/samples/post-img3.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2016-08-23" class="posts__date">Abril 05, 2017</time>
                    <h6 class="posts__title"><a href="detalle_noticia.html">@{{datos[5].noticias['titulo']}}</a></h6>
                    
                  </div>
                  
                </div>
              </div>


              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="detalle_noticia.html"><img src="assets/webnueva/images/samples/post-img06.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2016-08-23" class="posts__date">Abril 06, 2017</time>
                    <h6 class="posts__title"><a href="detalle_noticia.html">@{{datos[6].noticias['titulo']}}</a></h6>
                    
                  </div>
                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="detalle_noticia.html"><img src="assets/webnueva/images/samples/post-img03.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2016-08-23" class="posts__date">Abril 06, 2017</time>
                    <h6 class="posts__title"><a href="detalle_noticia.html">@{{datos[7].noticias['titulo']}}</a></h6>
                    
                  </div>
                  
                </div>
              </div>

            </div>
            <!-- Post Area 1 / End -->


            <!-- Last Game Results -->
            
              
                <h4><img src="assets/webnueva/images/samples/banner02.jpg"></h4>
              
              
            <!-- Last Game Results / End -->


            <!-- Post Area 2 -->
            <div class="posts posts--cards post-grid row">

              

              

              <div class="clearfix hidden-md hidden-lg"></div>

             

              

              <div class="clearfix hidden-md hidden-lg"></div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="#"><img src="assets/webnueva/images/samples/post-img8.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    
                    <h6 class="posts__title"><a href="#">Galería de Fotos</a></h6>
                  </div>
                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="#"><img src="assets/webnueva/images/samples/post-img2.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <h6 class="posts__title"><a href="#">ACLAV Social</a></h6>
                  </div>
                  
                </div>
              </div>


            </div>
            <!-- Post Area 2 / End -->


            <!-- Lates News -->
            
            <!-- Lates News / End -->


          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          <div id="sidebar" class="sidebar col-md-4">
            <!-- Widget: Standings -->
            <aside class="widget card widget--sidebar widget-standings">
              <div class="widget__title card__header card__header--has-btn">
                <h4>Liga Argentina de Voleibol</h4>
              </div>
              <div class="widget__content card__content">
                <div class="table-responsive">
                  <table class="table table-hover table-standings">
                    <thead>
                      <tr>
                        <th>Posiciones</th>
                        <th>J</th>
                        <th>G</th>
                        <th>E</th>
                        <th>PTS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/001.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Personal Bolívar</h6>
                            </div>
                          </div>
                        </td>
                        <td>36</td>
                        <td>14</td>
                        <td>10</td>
                        <td>118</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Ciudad Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>32</td>
                        <td>20</td>
                        <td>8</td>
                        <td>104</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/003.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">UPCN San Juan Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>32</td>
                        <td>21</td>
                        <td>7</td>
                        <td>103</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/004.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Lomas Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>30</td>
                        <td>20</td>
                        <td>10</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/005.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Gigantes del Sur</h6>
                            </div>
                          </div>
                        </td>
                        <td>28</td>
                        <td>24</td>
                        <td>8</td>
                        <td>92</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/006.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Obras UDAP Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>27</td>
                        <td>24</td>
                        <td>9</td>
                        <td>90</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/007.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Alianza Jesús María</h6>
                            </div>
                          </div>
                        </td>
                        <td>25</td>
                        <td>28</td>
                        <td>7</td>
                        <td>82</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/008.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">River Plate</h6>
                            </div>
                          </div>
                        </td>
                        <td>24</td>
                        <td>30</td>
                        <td>6</td>
                        <td>78</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/009.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Deportivo Morón</h6>
                            </div>
                          </div>
                        </td>
                        <td>24</td>
                        <td>30</td>
                        <td>6</td>
                        <td>78</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/010.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">Untref Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>24</td>
                        <td>30</td>
                        <td>6</td>
                        <td>78</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="assets/webnueva/images/samples/logos/011.png" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name">PSM Voley</h6>
                            </div>
                          </div>
                        </td>
                        <td>24</td>
                        <td>30</td>
                        <td>6</td>
                        <td>78</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </aside>
            
            <!-- Widget: Twitter -->
            <aside class="widget widget--sidebar card widget-twitter">
              <div class="widget__title card__header">
                <h4>Twitter</h4>
              </div>
              <div class="widget__content card__content">
                <ul>
                  <a class="twitter-timeline"  href="https://twitter.com/VoleyACLAV"  data-widget-id="487689182769192960">Tweets por @VoleyACLAV</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </ul>
              </div>
            </aside>
            <!-- Widget: Twitter / End -->

            

            <!-- Widget: Featured Player - Alternative Extended -->
            <aside class="widget card widget--sidebar widget-player widget-player--alt">
              <div class="widget__title card__header">
                <h4>Jugador de la Fecha</h4>
              </div>
              <div class="widget__content card__content">
                <div class="widget-player__team-logo">
                  <img src="assets/webnueva/images/logo.png" alt="">
                </div>
                <figure class="widget-player__photo">
                  <img src="assets/webnueva/images/samples/widget-featured-player.png" alt="">
                </figure>
                <header class="widget-player__header clearfix">
                  <div class="widget-player__number">38</div>
                  <h4 class="widget-player__name">
                    <span class="widget-player__first-name">Martin</span>
                    <span class="widget-player__last-name">Ramos</span>
                  </h4>
                </header>
                <div class="widget-player__content">
                  <div class="widget-player__content-inner">
                    <div class="widget-player__stat widget-player__assists">
                      <h6 class="widget-player__stat-label">Asistencias</h6>
                      <div class="widget-player__stat-number">16.9</div>
                    </div>
                    <div class="widget-player__stat widget-player__steals">
                      <h6 class="widget-player__stat-label">Saque</h6>
                      <div class="widget-player__stat-number">7.2</div>
                    </div>
                    <div class="widget-player__stat widget-player__blocks">
                      <h6 class="widget-player__stat-label">Bloqueo</h6>
                      <div class="widget-player__stat-number">12.4</div>
                    </div>
                  </div>
                </div>
                <footer class="widget-player__footer">
                  <span class="widget-player__footer-txt">
                    UPCN San Juan Voley Club
                  </span>
                </footer>
              </div>
              
            </aside>
            <!-- Widget: Featured Player - Alternative Extended / End -->

            <!-- Widget: Popular News -->
            <aside class="widget widget--sidebar card widget-popular-posts">
              <div class="widget__title card__header">
                <h4><img src="assets/webnueva/images/samples/banner002.jpg"></h4>
              </div>
              
            </aside>
            <!-- Widget: Popular News / End -->
            

          </div>
          <!-- Sidebar / End -->
        </div>
@endsection        