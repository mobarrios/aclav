<!DOCTYPE html>
<html lang="zxx"  ng-app="scotchApp">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <title>ACLAV - Asociación de Clubes Liga Argentina de Voleibol</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Alchemists - Sports News HTML Template">
  <meta name="author" content="Dan Fisher">
  <meta name="keywords" content="Sports News HTML Template">

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/favicon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/favicon-152.png">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

  <!-- Google Web Fonts
  ================================================== -->
  @include('web_nueva.template.css')

</head>
<body class="template-basketball">

  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    <!-- Header
    ================================================== -->
  
    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
      <div class="header-mobile__logo">
        <a href="index.html"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
      </div>
      <div class="header-mobile__inner">
        <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
        <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
      </div>
    </div>
  
   @include('web_nueva.template.header')
   
   @yield('content') 
  

</div>

        <!-- Video Slideshow / End -->

   <!-- Footer
    ================================================== -->

   @include('web_nueva.template.footer')
    <!-- Footer / End -->
    
    
    <!-- Login/Register Modal -->
    <div class="modal fade" id="modal-login-register" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal--login" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
    
            <div class="modal-account-holder">
              <div class="modal-account__item">
    
                <!-- Register Form -->
                <form action="#" class="modal-form">
                  <h5>Register Now!</h5>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Repeat your password...">
                  </div>
                  <div class="form-group form-group--submit">
                    <a href="shop-account.html" class="btn btn-primary btn-block">Create Your Account</a>
                  </div>
                  <div class="modal-form--note">You’ll receive a confirmation email in your inbox with a link to activate your account. </div>
                </form>
                <!-- Register Form / End -->
    
              </div>
              <div class="modal-account__item">
    
                <!-- Login Form -->
                <form action="#" class="modal-form">
                  <h5>Login to your account</h5>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group form-group--pass-reminder">
                    <label class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                      <span class="checkbox-indicator"></span>
                    </label>
                    <a href="#">Forgot your password?</a>
                  </div>
                  <div class="form-group form-group--submit">
                    <a href="shop-account.html" class="btn btn-primary-inverse btn-block">Enter to your account</a>
                  </div>
                  <div class="modal-form--social">
                    <h6>or Login with your social profile:</h6>
                    <ul class="social-links social-links--btn text-center">
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--fb"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--twitter"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a href="#" class="social-links__link social-links__link--lg social-links__link--gplus"><i class="fa fa-google-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </form>
                <!-- Login Form / End -->
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login/Register Modal / End -->
    
    
  </div>

  <!-- Javascript Files
  ================================================== -->
  <!-- Core JS -->
  @include('web_nueva.template.js')
  

  </body>
  </html>