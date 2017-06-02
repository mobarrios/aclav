@extends('web_nueva.template')
@section('content')
 <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">

              

             
<!-- Contact Area -->
        <div class="card">
          <header class="card__header">
            <h4>Contactanos</h4>
          </header>
          <div class="card__content">

            <div class="row">
              <div class="col-md-4">
                <h5>Teléfono: </h5>
                <p>+54 9 11 4783-5010</p>

                <div class="spacer-sm"></div>

                <h5>Dirección:</h5>
                <p>Echeverria 1444, Entre Piso, Oficina 40 - Ciudad Autónoma de Buenos Aires</p>

                <h5>Email de Contacto:</h5>
                <p><a href="mailto:info@aclav.com"><font color="#000000">info@aclav.com</font></a></p>
              </div>
              <div class="col-md-8">

                <!-- Contact Form -->
                <form action="#" class="contact-form">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-name">Su Nombre <span class="required">*</span></label>
                        <input type="text" name="contact-form-name" id="contact-form-name" class="form-control" placeholder="Nombre...">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-email">Su Email <span class="required">*</span></label>
                        <input type="email" name="contact-form-email" id="contact-form-email" class="form-control" placeholder="Email...">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-subject">Tema</label>
                        <input type="text" name="contact-form-subject" id="contact-form-subject" class="form-control" placeholder="Tema...">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contact-form-message">Comentario <span class="required">*</span></label>
                    <textarea name="name" rows="5" class="form-control" placeholder="Ingresa tu comentario aqui..."></textarea>
                  </div>
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Envia tu mensaje</button>
                  </div>
                </form>
                <!-- Contact Form / End -->
              </div>
            </div>

          </div>
        </div>
        <!-- Contact Area / End -->
              

             

            </div>
            <!-- Posts List / End -->

            <!-- Post Pagination -->
            
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
                <h4><img src="assets/webnueva/images/samples/banner002.jpg"></h4>
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


          </div>
          <!-- Sidebar / End -->
        </div>


  </div>
</div>
@endsection     