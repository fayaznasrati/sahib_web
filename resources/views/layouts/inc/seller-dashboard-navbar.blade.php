
<div class="header section" >



    <div class="header section" >

        <!-- Header Top Start -->
        <div class="header-top bg-light">
            <div class="container">
                <div class="row row-cols-xl-2 align-items-center">
    
                    <!-- Header Top Language, Currency & Link Start -->
                    <div class="col d-none d-lg-block"> </div>
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
                        <a href="/user/seller/dashboard">
                            <i class="fa fa-user fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                               My Profile 
                            </span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="/user/seller/brand-dashboard">
                            <i class="fa fa-cogs fa-2x fa-icons"></i>
                             <span class="service_nav_text">
                                 Brand Profile
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
                       
                    </li>
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
    
    
        <!-- Header Bottom End -->
    
    </div>
    
    
    <!-- Header Bottom Start -->
    <div class="header-bottom" >
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center" style="padding: 15px">

                    <!-- Header Logo Start -->
                    <div class="col-xl-2 col-6">
                        <div class="header-logo">
                            <a href="/" target="_blank"><img src="{{asset('assets/images/logo/logo_2.png')}}"  alt="Sahib.af Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    {{-- <div class="col-xl-8 d-none d-xl-block">
                        <div class="main-menu position-relative">
                            <ul>
                                <li > <a href="/user/seller/brand-dashboard"><span>My Brand Profile</span></a></li>
                                <li><a href="{{route('seller-products')}}"> <span>My product List</span></a></li>
                                <li><a class="{{ request()->is(url('/user/post/create')) ? 'active' : '' }}"  href="{{route('seller-create-products')}}"> <span>Create New Product</span></a></li>
                                 <li><a href="/user/seller/dashboard"> <span>My Profile</span></a></li> 
                                <li class="has-children">
                                    <a href="#"> <span>More</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/user/seller/dashboard">My Profile</a></li>
                                        <li><a href="my-wishlist">My Wishlist</a></li>
                                        <li><a href="my-shopping-cart">My Shopping Cart</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-xl-2 col-6">
                        <div class="header-actions">
                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->
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
                    <li><a target="_blank" href="/">Home</a></li>
                    <li><a href="/user/seller/dashboard">My Profile</a></li>
                    <li><a href="/user/seller/brand-dashboard">My Brand Profile</a></li>
                    <li><a href="/user/seller/brand/products">Manage Products</a></li>
                    <li><a href="/user/seller/create/brand/products">Create Products</a></li>
                </ul>
            </nav>
        </div>
        <!-- Mobile Menu End -->

        <!-- Language, Currency & Link Start -->
        {{-- <div class="offcanvas-lag-curr mb-6">
            <h2 class="title">Languages</h2>
            <div class="header-top-lan-curr-link">
                <div class="header-top-lan dropdown">
                    <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">فارسی</a></li>
                        <li><a class="dropdown-item" href="#">پشتو</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Language, Currency & Link End --> --}}
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
                        <li><a class="dropdown-item" href="/ask-to-register">Register</a></li>
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
        <div class="mt-auto">

            {{-- <!-- Contact Links Start -->
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
            </div> --}}
            <!-- Social Widget Ende -->
        </div>
        <!-- Contact Links/Social Links End -->
    </div>
    <!-- Mobile Menu Inner End -->
</div>
<!-- Mobile Menu End -->
</div>

