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
   <title>Category</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icons -->
   <!-- basic -->
   <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Category</title>
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

<body id="default_theme" class="about">
   <!-- header -->
   @include('layouts.inc.app.sidebar', ['categories' => $categories])
   
   <header class="header">
      <div class="header_top">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img src="img/menu_icon.png" alt="#" /></span>
                     <div class="logo_circle">
                        <h1 style="color:White" href="index.html"><Strong>VIET FURNITURE</Strong></h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="float-right">
                     <ul class="top_links">
                        <li><a href="{{route('login')}}"><img src="images/profile_icon.png" alt="#" /></a></li>
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
                  <h2>Category</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Banner Slider -->
   <!-- section -->
   <section class="layout_padding what_we_do">
      <div class="container">
        
         <div class="row">
            @foreach ($data as $row )
            <div class="col-md-3">
               <div class="full decorate_blog">
                  <img src="images/sm1.png" alt="#" />
                  <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                  <h5>{{$row->categoryName}}</h5>
                  </div>
               </div>
            </div>
            @endforeach
      </div>
   </section>
   <!-- end section -->
   <!-- section -->
   <section class="layout_padding about_section">
      <div class="container">
         <div class="row">
            <div class="col-md-7 p-relative r-left">
               <div class="full back_blog text_align_center padding_right_left_15">
                  <img src="images/wd_1.png" alt="#" />
               </div>
            </div>
            <div class="col-md-5">
               <div class="full heading_s1">
                  <h3>Best Home Decoration</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum..</p>
               </div>
               <div class="full">
                  <a class="read_more_bt" href="#">Get A Quote</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- section -->
   <section class="layout_padding about_section">
      <div class="container">
         <div class="row">
            <div class="col-md-7 p-relative r-left">
               <div class="full back_blog text_align_center padding_right_left_15">
                  <img src="images/wd_2.png" alt="#" />
               </div>
            </div>
            <div class="col-md-5">
               <div class="full heading_s1">
                  <h3>Best office Lighting</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum..</p>
               </div>
               <div class="full">
                  <a class="read_more_bt" href="#">Get A Quote</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- footer -->
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