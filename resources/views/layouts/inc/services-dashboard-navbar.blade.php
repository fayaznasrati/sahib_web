
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
                        <a href="/user/service-brand-dashboard">
                            <i class="fa fa-home fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                              My Brand Profile
                            </span>
                        </a>
                      
                    </li>
                    <li class="service_has_subnav">
                        <a href="/user/service-user-profile">
                            <i class="fa fa-user fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                               My Profile 
                            </span>
                        </a>
                        
                    </li>
                    <li class="service_has_subnav">
                        <a href="/user/service/brand/products">
                            <i class="fa fa-list fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                               My Products List
                            </span>
                        </a>
                        
                    </li>
                    <li class="service_has_subnav">
                        <a href="/user/create-service-brand-products">
                            <i class="fa fa-pencil fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                                Create New Products
                            </span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-film fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                                Surveying Tutorials
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                               Surveying Jobs
                            </span>
                        </a>
                    </li>
                    <li>
                       <a href="#">
                           <i class="fa fa-cogs fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                                Tools & Resources
                            </span>
                        </a>
                    </li>
                    <li>
                       <a href="#">
                            <i class="fa fa-map-marker fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                                Member Map
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           <i class="fa fa-info fa-2x fa-icons"></i>
                            <span class="service_nav_text">
                                Documentation
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
                    <div class="col-xl-8 d-none d-xl-block">
                        <div class="main-menu position-relative">
                            <ul>
                                <li > <a href="/user/seller/brand-dashboard"><span>My Brand Profile</span></a></li>
                                <li><a href="{{route('seller-products')}}"> <span>My product List</span></a></li>
                                <li><a class="{{ request()->is(url('/user/post/create')) ? 'active' : '' }}"  href="{{route('seller-create-products')}}"> <span>Create New Product</span></a></li>
                                {{-- <li><a href="/user/seller/dashboard"> <span>My Profile</span></a></li> --}}
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
                    </div>
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

</div>

