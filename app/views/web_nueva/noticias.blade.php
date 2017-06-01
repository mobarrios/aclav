@extends('template')
@section('content')
<div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">

              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <a href="detalle_noticia.html"><img src="assets/images/samples/post-img4-m.jpg" alt=""></a>
                    
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">ACLAV</span>
                      </div>
                      <h6 class="posts__title"><a href="detalle_noticia.html">Tres podios y 28 triunfos, el balance de UPCN en la temporada</a></h6>
                      <time datetime="2016-08-23" class="posts__date">24-04-2017</time>
                      <div class="posts__excerpt">
                        Cinco competiciones oficiales, tres podios, 43 partidos disputados y 28 victorias. Un gran balance de UPCN San Juan Voley en la temporada 2016/17 que lo sigue manteniendo en lo alto del vóley argentino. 
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <a href="detalle_noticia.html"><img src="assets/images/samples/post-img3-m.jpg" alt=""></a>
                    
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">ACLAV</span>
                      </div>
                      <h6 class="posts__title"><a href="detalle_noticia.html">Realizada la Gala de clausura de la temporada 2016/2017</a></h6>
                      <time datetime="2016-08-22" class="posts__date">24-04-2017</time>
                      <div class="posts__excerpt">
                        Como es habitual al cierre de cada temporada de la Liga Argentina de Voleibol Banco Nación, se llevó a cabo la Gala de clausura de una nueva edición de la competencia...
                      </div>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                        </figure>
                        
                      </div>
                      
                    </footer>
                  </div>
                </div>
              </div>

              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <a href="detalle_noticia.html"><img src="assets/images/samples/post-img5-m.jpg" alt=""></a>
                   
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">ACLAV</span>
                      </div>
                      <h6 class="posts__title"><a href="detalle_noticia.html">Voces de los protagonistas en la Gala ACLAV 16/17</a></h6>
                      <time datetime="2016-08-21" class="posts__date">24-04-2017</time>
                      <div class="posts__excerpt">
                        En el marco del evento de cierre de una nueva temporada de la Liga Argentina de Voleibol Banco Nación, Pablo Crer (Personal Bolívar)....
                      </div>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                        </figure>
                        
                      </div>
                      
                    </footer>
                  </div>
                </div>
              </div>

              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-2 card">
                  <figure class="posts__thumb">
                    <a href="detalle_noticia.html"><img src="assets/images/samples/post-img1-m.jpg" alt=""></a>
                   
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">ACLAV</span>
                      </div>
                      <h6 class="posts__title"><a href="detalle_noticia.html">Thomas Edgar: "Más que equipo, esto es una gran familia"</a></h6>
                      <time datetime="2016-08-18" class="posts__date">24-04-2017</time>
                      <div class="posts__excerpt">
                        Personal Bolívar logró su tan ansiada séptima corona en la Liga Argentina y se convirtió en el máximo ganador de la historia del vóley argentino. El australiano fue una de las figuras del logro.
                      </div>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                        </figure>
                        
                      </div>
                      
                    </footer>
                  </div>
                </div>
              </div>

             

              

             

            </div>
            <!-- Posts List / End -->

            <!-- Post Pagination -->
            <nav class="post-pagination text-center">
              <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span>...</span></li>
                <li><a href="#">16</a></li>
              </ul>
            </nav>
            <!-- Post Pagination / End -->
            

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
                              <img src="assets/images/samples/logos/001.png" alt="">
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
                              <img src="assets/images/samples/logos/002.png" alt="">
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
                              <img src="assets/images/samples/logos/003.png" alt="">
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
                              <img src="assets/images/samples/logos/004.png" alt="">
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
                              <img src="assets/images/samples/logos/005.png" alt="">
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
                              <img src="assets/images/samples/logos/006.png" alt="">
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
                              <img src="assets/images/samples/logos/007.png" alt="">
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
                              <img src="assets/images/samples/logos/008.png" alt="">
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
                              <img src="assets/images/samples/logos/009.png" alt="">
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
                              <img src="assets/images/samples/logos/010.png" alt="">
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
                              <img src="assets/images/samples/logos/011.png" alt="">
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
            <!-- Widget: Standings / End -->
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

            <!-- Widget: Social Buttons -->
            <aside class="widget widget--sidebar widget-social widget-social--condensed">
              <a href="#" class="btn-social-counter btn-social-counter--fb">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-facebook"></i>
                </div>
                <h6 class="btn-social-counter__title">Seguinos en Facebook</h6>
                <span class="btn-social-counter__count">83600 Likes</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="#" class="btn-social-counter btn-social-counter--twitter">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-twitter"></i>
                </div>
                <h6 class="btn-social-counter__title">Siguenos en Twitter</h6>
                <span class="btn-social-counter__count">580 Followers</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="#" class="btn-social-counter btn-social-counter--rss">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-instagram"></i>
                </div>
                <h6 class="btn-social-counter__title">Miranos en Instagram</h6>
                <span class="btn-social-counter__count">840 Subscribers</span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>
            <!-- Widget: Social Buttons / End -->
            

            <!-- Widget: Popular News -->
            <aside class="widget widget--sidebar card widget-popular-posts">
              <div class="widget__title card__header">
                <h4><img src="assets/images/samples/banner002.jpg"></h4>
              </div>
              
            </aside>
            <!-- Widget: Popular News / End -->
            

            <!-- Widget: Featured Player - Alternative Extended -->
            <aside class="widget card widget--sidebar widget-player widget-player--alt">
              <div class="widget__title card__header">
                <h4>Jugador de la Fecha</h4>
              </div>
              <div class="widget__content card__content">
                <div class="widget-player__team-logo">
                  <img src="assets/images/logo.png" alt="">
                </div>
                <figure class="widget-player__photo">
                  <img src="assets/images/samples/widget-featured-player.png" alt="">
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

          </div>
          <!-- Sidebar / End -->
        </div>

  </div>
</div>
@endsection