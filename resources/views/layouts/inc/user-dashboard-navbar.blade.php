<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top bg-light">
        <div class="container">
            <div class="row row-cols-xl-2 align-items-center">

                <!-- Header Top Language, Currency & Link Start -->
                <div class="col d-none d-lg-block">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">فارسی</a></li>
                                <li><a class="dropdown-item" href="#">پشتو</a></li>
                            </ul>
                        </div>
                        <div class="header-top-links">
                            <span>Call Us</span><a href="#"> +93 01234567</a>
                        </div>
                    </div>
                </div>
                <!-- Header Top Language, Currency & Link End -->

                <!-- Header Top Message Start -->
                <div class="col">
                    
                    <p class="header-top-message pl-4">
                        {{--Create ads for free.  <a href="/create-ads" class="pl-4"><span class="ad-Button">Create Ads</span></a> --}}
                       @guest
                       @else
                       Welcome: <b id="user-name">{{ Auth::user()->name }}</b>
                       @endguest
                      
                      
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </p>
                </div>
                <!-- Header Top Message End -->

            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
   <!-- Header Bottom Start -->
   <div class="service_area"></div>
   <nav class="service_main_menu">
           <ul>
               <li>
                   <a target="_blanck" href="/">
                       <i class="fa fa-home fa-2x fa-icons"></i>
                       <span class="service_nav_text">
                         Home
                       </span>
                   </a>
                 
               </li>
               <li class="service_has_subnav">
                   <a href="/dashboard">
                       <i class="fa fa-user fa-2x fa-icons"></i>
                       <span class="service_nav_text">
                          My Profile 
                       </span>
                   </a>
                   
               </li>
               <li>
                <a href="/my-wishlist">
                    <i class="fa fa-user fa-2x fa-icons"></i>
                     <span class="service_nav_text">
                         My Wishlist
                     </span>
                 </a>
             </li>
            {{--  <li>
                <a href="/my-shopping-cart">
                    <i class="fa fa-user fa-2x fa-icons"></i>
                     <span class="service_nav_text">
                         My Shopping cart
                     </span>
                 </a>
             </li>

               <li class="service_has_subnav">
                   <a href="/user/seller/brand/products">
                       <i class="fa fa-list fa-2x fa-icons"></i>
                       <span class="service_nav_text">
                          My Products List
                       </span>
                   </a>
                   
               </li>
               <li class="service_has_subnav">
                   <a href="/user/seller/create/brand/products">
                       <i class="fa fa-pencil fa-2x fa-icons"></i>
                       <span class="service_nav_text">
                           Create New Products
                       </span>
                   </a>
                  
               </li> --}}
           </ul>

           <ul class="logout">
               <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off fa-2x fa-icons"></i>
                       <span class="service_nav_text">
                           {{ __('Logout') }}
                       </span>
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
               </li>  
           </ul>
   </nav>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/dashboard">My Profile</a></li>
                        <li><a href="/my-wishlist">My Wishlist</a></li>
                        <li><a href="/my-shopping-cart">My Shopping Cart</a></li>
                        
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <div class="offcanvas-lag-curr mb-6">
                <h2 class="title">Languages</h2>
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"  style="color:white">English <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">Engalish</a></li>
                            <li><a class="dropdown-item" href="#">فارسی</a></li>
                            <li><a class="dropdown-item" href="#">پشتو</a></li>
                        </ul>
                    </div>
                    @guest
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"  style="color:white">Login <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/register">Register</a></li>
                        </ul>
                    </div>
                        @else
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown" style="color:white"> Welcome: <b id="user-name">{{ Auth::user()->name }}</b> <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item"  style="color:rgb(78, 17, 17)" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }} </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">   @csrf </form>
                            </ul>
                        </div>

                    @endguest
                  
                </div>
            </div>

            <!-- Contact Links/Social Links Start -->
            {{-- <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +93 987654321</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> info@sahib.af</a></li>
                    <li><i class="fa fa-clock-o"></i> <span>24/7</span> </li>
                </ul>
                <!-- Contact Links End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i class="fa fa-instagram"></i></a>
                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                </div>
                <!-- Social Widget Ende -->
            </div> --}}
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->
</div>

