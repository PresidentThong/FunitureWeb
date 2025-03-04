<!DOCTYPE html>
<html lang="en">
   <head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Contact us</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icons -->
   <link rel="icon" href="{{ asset('img/fevicon.png') }}" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{ asset('clients/css/bootstrap.min.css') }}" />
   <!-- site css -->
   <link rel="stylesheet" href="{{ asset('clients/css/style.css') }}" />
   <!-- responsive css -->
   <link rel="stylesheet" href="{{ asset('clients/css/responsive.css') }}" />
   <!-- colors css -->
   <link rel="stylesheet" href="{{ asset('clients/css/colors.css') }}" />
   <!-- custom css -->
   <link rel="stylesheet" href="{{ asset('clients/css/custom.css') }}" />
   <!-- wow animation css -->
   <link rel="stylesheet" href="{{ asset('clients/css/animate.css') }}" />
   <!-- Revolution Loaling Fonts and Icons  -->
   <link rel="stylesheet" href="{{ asset('clients/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
   <!-- Revolution style Sheets  -->
   <link rel="stylesheet" href="{{ asset('clients/js/revolution/css/settings.css') }}">
   <link rel="stylesheet" href="{{ asset('clients/js/revolution/css/layers.css') }}">
   <link rel="stylesheet" href="{{ asset('clients/js/revolution/css/navigation.css') }}">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{ asset('clients/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('clients/css/owl.theme.default.css') }}">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="default_theme" class="contact">
      <!--side bar-->
      @include('layouts.inc.app.sidebar', ['categories' => $categories])
      
      <header class="header">
         <div class="header_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="full">
                        <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img src="img/menu_icon.png" alt="#" /></span>
                        <div class="logo_circle">
                           <h1 style="color:White" href="/"><Strong>VIET FURNITURE</Strong></h1>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="float-right">
                        <ul class="top_links">
                           <li><a href="{{ route('login') }}"><img src="images/profile_icon.png" alt="#" /></a></li>
                           <li class="searchbar">
                              <input class="search_input" type="text" name="" placeholder="Search...">
                              <a href="#" class="search_icon"><img src="images/search_icon.png" alt="#" /></a>
                           </li>
                        </ul> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- Start Banner Slider -->
      <div id="inner_pade" class="banner-slider">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                      <h2>Contact us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Banner Slider -->
      <section>
         <div class="container">
             <div class="row margin_top_50">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-sm-4">
                                          <div class="full cont_info">
                                             <i class="fa fa-map-marker"></i>
                                             <span>Ho Chi Minh City</span>
                                          </div>
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="full cont_info">
                                             <i class="fa fa-phone"></i>
                                             <span>Call +84 1234 567 890</span>
                                          </div>
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="full cont_info">
                                             <i class="fa fa-envelope" style="font-size: 17px;"></i>
                                             <span>VietFuniture.contact@gmail.com</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
         </div>
      </section>
      <!-- section -->
      <section class="layout_padding request_form">
         <div class="container">
            <div class="row">

               <div class="col-md-8 offset-md-2">
                  <div class="full text_align_center">
                     <h3>Request A Call Back</h3>
                  </div>
                  <div class="full">
                      <form class="form_main">
                         <fieldset>
                            <div class="row">
                              <div class="col-md-10 offset-md-1">
                                 <div class="full field">
                                     <input type="text" name="name" placeholder="Your Name" required="" />
                                 </div>
                                 <div class="full field">
                                     <input type="text" name="number" placeholder="Phone Number" required="" />
                                 </div>
                                 <div class="full field">
                                     <input type="email" name="email" placeholder="Email" required="" />
                                 </div>
                                 <div class="full field">
                                    <textarea placeholder="Message"></textarea>
                                 </div>
                                 <div class="full field center">
                                    <button>Send</button>
                                 </div>
                              </div>
                            </div>
                         </fieldset>
                      </form>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- end section -->

      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_top">
                     <div class="container">
                        <div class="row justify-content-center">
                           <!-- Menu Section -->
                           <div class="col-sm-3">
                              <div class="heading_footer">
                                 <h3>Menu</h3>
                              </div>
                              <ul class="footer_link list-unstyled">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Services</a></li>
                                 <li><a href="{{url('list')}}">What We Do</a></li>
                                 <li><a href="#">Testimonial</a></li>
                                 <li><a href="#">Contact Us</a></li>
                              </ul>
                           </div>
               
                           <!-- Instagram Section -->
                           <div class="col-sm-3">
                              <div class="heading_footer">
                                 <h3>Instagram</h3>
                              </div>
                              <ul class="footer_link_intas list-unstyled">
                                 <li>
                                    <span><img src="images/f_in_blog.png" alt="Instagram Image 1" /></span>
                                    <span>Consectetur Adipiscing</span>
                                 </li>
                                 <li>
                                    <span><img src="images/f_in_blog2.png" alt="Instagram Image 2" /></span>
                                    <span>Consectetur Adipiscing</span>
                                 </li>
                              </ul>
                           </div>
               
                           <!-- Subscribe Section -->
                           <div class="col-sm-3">
                              <div class="heading_footer">
                                 <h3>Subscribe</h3>
                              </div>
                              <div class="footer_form">
                                 <form>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-10">
                                             <input type="email" placeholder="Your Email" name="_email" class="form-control mb-2" />
                                             <button type="submit" class="btn btn-primary">Subscribe</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
               
                        <!-- Contact Information Section -->
                        <div class="row margin_top_50 text-center">
                           <div class="col-md-10 offset-md-1">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="cont_info">
                                       <i class="fa fa-map-marker"></i>
                                       <span>Ho Chi Minh City</span>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="cont_info">
                                       <i class="fa fa-phone"></i>
                                       <span>Call +01 1234 567 890</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>   
      <!-- end footer -->
      <!-- cpy -->
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full center">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                     </ul>
                  </div>
                  <div class="full text_align_center">
                     <p>© 2024 All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cpy -->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="{{ asset('clients/js/jquery.min.js') }}"></script>
      <script src="{{ asset('clients/js/popper.min.js') }}"></script>
      <script src="{{ asset('clients/js/bootstrap.min.js') }}"></script>
      <!-- javascript -->
      <script src="{{ asset('clients/js/owl.carousel.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('clients/js/wow.js') }}"></script>
      <!-- menumaker -->
      <script src="{{ asset('clients/js/menumaker.js') }}"></script>
      <!-- custom js -->
      <script src="{{ asset('clients/js/custom.js') }}"></script>
   </body>
</html>