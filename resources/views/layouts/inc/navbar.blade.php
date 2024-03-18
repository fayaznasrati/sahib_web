<div class="header section">
 
      
       
  <!-- Header Top Start -->
  <div class="header-top bg-light">
    <div class="container">
        <div class="row row-cols-xl-2 align-items-center">

            <!-- Header Top Language, Currency & Link Start -->
            <div class="col d-none d-lg-block">
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown" id="have-main-color">English <i class="fa fa-angle-down"></i></button>
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
                
                <p class="header-top-message">
                  
                    @if (Auth::check() && Auth::user()->role === '2')
                    Seller <a href="/user/seller/create/brand/products"><span class="ad-Button">Create Products</span></a>
                    @elseif(Auth::check() && Auth::user()->role === '1')
                    Adminstrator
                    @else
                    <a href="/register/seller"><span class="ad-Button">Become a seller</span></a>
                    @endif
                    @guest
                    <a href="/login">login</a>
                    <a href="/ask-to-register">Register</a></p>
                    @else
                    Welcome: <b id="user-name">{{ Auth::user()->name }}</b>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">   @csrf </form>
                    @endguest
            </div>
            <!-- Header Top Message End -->
  
        </div>
    </div>
</div>
<!-- Header Top End -->


        <!-- Header Top Start -->
        <div class="container-fluid mt-2 ">
            <div class="row">
                <div class="container col-md-2">
                    <span  class="overlay-logo" id="scrollDisplay">
                        
                        <a href="/"> <img src="{{asset('assets/images/logo/sahib_logo.png')}}" alt="Sahib.af Logo" /></a>
                     </span>
                </div>
                     <div class="container col-md-7">
                        <form action="/search" method="get" >
                          <span class="all-search-box" style="margin-right: 40px">
                              <input  type="search" name="query" id="autocomplete" placeholder="search anything here..." class="input-with-icon">
                              <button type="submit" class="search-button">Search</button>
                              <span id="search-results"></span>
                          </span>
                        </form>
                         </div>
                         <div class="col-md-2" >
                              <!-- Header Action Start -->

                            <div class="header-actions " id="hideme">

   
                                @if(Auth::check())
                                @if (Auth::user()->role === '1')
                                <a href="/admin/dashboard" class="header-action-btn d-none d-md-block" ><i class="pe-7s-user"></i></a>
                                @elseif (Auth::user()->role === '2')
                                <a href="/user/seller/dashboard" class="header-action-btn d-none d-md-block" ><i class="pe-7s-user"></i></a>
                                @else
                                <a href="/user/dashboard" class="header-action-btn d-none d-md-block" ><i class="pe-7s-user"></i></a>
                                @endif
                                @endif
                                <!-- User Account Header Action Button End -->
                                <!-- Shopping Cart Header Action Button Start -->
                                <a href="javascript:void(0)"  id="likedItemSection" class="header-action-btn header-action-btn-wishlist">     
                                    <i class="pe-7s-like"></i>
                                @if (Auth::check())
                                  @if (count($wishlists)>=1)
                                    <span class="header-action-num">{{count($wishlists)}}</span>
                                @endif
                                 {{-- <!-- Shopping Cart Header Action Button Start -->
                                 <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    @if (count($wishlists)>=1)
                                    <span class="header-action-num">{{count($wishlists)}}</span>
                                    @endif
                                </a>
                                <!-- Shopping Cart Header Action Button End --> --}}
                                @endif
                                   
                                </a>
                            </div>

                        <!-- Header Action End -->
                             </div>
                             <div class="container col-md-1"></div>
              
            </div>
        </div>
        <!-- Header Top End -->
        <hr>

    <!-- Header Bottom Start -->
    <div class="header-bottom" >
        <div class="header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-xl-1 col-6">
                        <div class="my-header-logo mt-1 mr-0" >
                            <a href="/"> <img src="{{asset('assets/images/logo/sahib_logo.png')}}" alt="Sahib.af Logo" /></a>
                          </div>
                    </div>
                    <!-- Header Logo End -->

                      <!-- Header Menu Start -->
                      <div class=" col-md-10 col-xl-10 d-none d-xl-block">
                        <div class="main-menu position-relative container" >
                            <ul>
                                @foreach ($topMenus as $topMenu )

                                @if ($topMenu->menu)
                                {{-- {{count($topMenu->menu) >0 ? "has" : "not"}} --}}
                                @if (count($topMenu->menu) >0)
                                     <li class="has-children position-static"  >
                                         <a href="#"><span>{{$topMenu->name}}</span>
                                             <i class="fa fa-angle-down"></i></a>
                                @else
                                    <li ><a href="#"><span>{{$topMenu->name}}</span></a>
                                @endif
                                  <ul class="mega-menu row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                @foreach ( $topMenu->menu as $menu)
                                                <li class="col-md-4"  >
                                                    <h4 class="mega-menu-title">{{$menu->name}} </h4>
                                                    <ul class="submenus">
                                                        @foreach ($menu->submenu as $submenu)
                                                        <li> <a href="/show-all-subcategory-posts/{{$menu->name}}/{{$submenu->slug}}"  rel="Category Name">{{$submenu->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="/"  ><img src="{{asset('assets/images/logo/logo_2.png')}}" style="height: 100px;width:200px " alt="Sahib.af Logo" /></a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="/"  ><img src="{{asset('assets/images/logo/logo_2.png')}}" style="height: 100px;width:200px " alt="Sahib.af Logo" /></a>
                                                </div>
                                            </div>
                                      
                                           
                                        </div>
                                      
                                    </ul>
                                   
                                </li>
                                @endif
                                {{-- <li class="has-children position-static" >
                                    <a href="#"><span>Products B</span> <i class="fa fa-angle-down"></i></a>
                                   
                                    
                                    <ul class="mega-menu row-cols-4" style="margin-top: -20px">
                                        @foreach ($menus4_8 as $menu )
                                        <li class="col">
                                            <h4 class="mega-menu-title">{{$menu->name}} </h4>
                                            <ul class="mb-n2">
                                                @foreach ($menu->submenu as $submenu)
                                                <li> <a href="/show-all-subcategory-posts/{{$menu->name}}/{{$submenu->slug}}"  rel="Category Name">{{$submenu->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                   
                                </li> --}}
                                {{-- <li><a href="contact.html"><span>Contact</span></a></li> --}}
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->
                    <!-- Header Action Start -->
                    <div class="col-xl-1 col-6">
                        <div class="header-actions " style="margin-top: -40px">

                          <span class="navabr_bottom_action">
                            <a href="javascript:void(0)"  id="likedItemSection" class="header-action-btn header-action-btn-wishlist ">     
                                <i class="pe-7s-like"></i>
                            @if (Auth::check())
                              @if (count($wishlists)>=1)
                                <span class="header-action-num">{{count($wishlists)}}</span>
                              @endif
                              <!-- Mobile Menu Hambarger Action Button Start -->
                            @endif  
                            </a>    
                        </span>   
                        @if (Auth::check())
                         <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                @if (Auth::user()->dp_image==null)
                                <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="No-Image" style="height: 40px;width:40px;border-radius:10px"/>
                                    @else
                                    {{ Str::limit(Auth::user()->name, 10) }}  <img src="../../../dp_images/{{ Auth::user()->dp_image }}" alt="User-DP" style="height: 40px;width:40px;border-radius:10px"/>
                                @endif
                            </a>
                            @else
                            <a href="/login" id="have-main-color" class="header-action-btn  d-xl-none d-lg-block">
                            Login <img src="{{ asset('assets/images/icons/nav-user-icon.png') }}" alt="No-Image" style="height: 40px;width:40px;border-radius:10px"/>
                            </a>
                            @endif 
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
    <div class="mobile-menu-wrapper" >
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
                    <ul class="mobile-menu" >
                        @foreach ($topMenus as $topMenu )
                        @if ($topMenu->menu)
                        @if (count($topMenu->menu) >0)
                             <li class="has-children"><a href="#"><span id="have-white-color">{{$topMenu->name}}</span> <i id="have-white-color" class="fa fa-angle-down"></i></a>
                        @else
                            <li ><a href="#"><span id="have-white-color">{{$topMenu->name}}</span></a>
                        @endif
                            <ul class="dropdown">
                                @foreach ( $topMenu->menu as $menu)
                                  @if (count($menu->submenu) >0)
                                   <li class="has-children" ><a href="#"><span id="have-white-color">{{$menu->name}}</span> <i id="have-white-color" class="fa fa-angle-down"></i></a>
                                  @else
                                   <li><a href="#"><span id="have-white-color">{{$menu->name}}</span></a>
                                  @endif
                                    <ul class="dropdown">
                                        @foreach ($menu->submenu as $submenu)
                                        <li style="padding-left: 20px"><a id="have-white-color" href="/show-all-subcategory-posts/{{$menu->name}}/{{$submenu->slug}}">{{$submenu->name}}</a></li> 
                                        @endforeach 
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

                        </li>
                        @endif
                        @endforeach
                        <hr>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <!-- Language, Currency & Link Start -->
            {{-- <div class="offcanvas-lag-curr mb-6">
                <h2 class="title">Languages</h2>
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button id="have-white-color" class="dropdown-toggle " data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">فارسی</a></li>
                            <li><a class="dropdown-item" href="#">پشتو</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
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
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"> Welcome: <b id="user-name">{{ Auth::user()->name }}</b> <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item"  style="color:white" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }} </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">   @csrf </form>
                            </ul>
                        </div>

                    @endguest
                  
                </div>
            </div>
            <!-- Language, Currency & Link End -->
            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="tel:+93785655511" id="have-white-color"> (+93) 785-655-511 </a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@sahib.af" id="have-white-color"> info@sahib.af</a></li> <a href="tel:+"></a>
                    <li><i class="fa fa-clock-o"></i> <span>Wazir-akbar-khan, Kabul Afghanistan</span> </li>
                </ul>
                <!-- Contact Links End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i id="have-white-color" class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i  id="have-white-color" class="fa fa-twitter"></i></a>
                    <a title="instagram" href="#"><i id="have-white-color" class="fa fa-instagram"></i></a>
                </div>
                <!-- Social Widget Ende -->
            </div>
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Offcanvas Search Start -->
    <div class="offcanvas-search">
        <div class="offcanvas-search-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Search Form Start -->
            <form class="offcanvas-search-form" action="#">
                <input type="text" placeholder="Search Here..." class="offcanvas-search-input">
            </form>
            <!-- Offcanvas Search Form End -->

        </div>
    </div>
    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->
    <div class="cart-offcanvas-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Cart Offcanvas Inner Start -->
        <div class="cart-offcanvas-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Cart Content Start -->
            <div class="offcanvas-cart-content">
                <!-- Offcanvas Cart Title Start -->
                <h2 class="offcanvas-cart-title mb-10">Shopping Cart</h2>
                <!-- Offcanvas Cart Title End -->

                <!-- Cart Product/Price Start -->
                <div class="cart-product-wrapper mb-6">

                    <!-- Single Cart Product Start -->
                    <div class="single-cart-product">
                        <div class="cart-product-thumb">
                            <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                        </div>
                        <div class="cart-product-content">
                            <h3 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h3>
                            <span class="price">
                            <span class="new">$38.50</span>
                            <span class="old">$40.00</span>
                            </span>
                        </div>
                    </div>
                    <!-- Single Cart Product End -->

                    <!-- Product Remove Start -->
                    <div class="cart-product-remove">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- Product Remove End -->

                </div>
                <!-- Cart Product/Price End -->

                <!-- Cart Product/Price Start -->
                <div class="cart-product-wrapper mb-6">

                    <!-- Single Cart Product Start -->
                    <div class="single-cart-product">
                        <div class="cart-product-thumb">
                            <a href="single-product.html"><img src="assets/images/products/small-product/2.jpg" alt="Cart Product"></a>
                        </div>
                        <div class="cart-product-content">
                            <h3 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h3>
                            <span class="price">
                            <span class="new">$14.50</span>
                            <span class="old">$18.00</span>
                            </span>
                        </div>
                    </div>
                    <!-- Single Cart Product End -->

                    <!-- Product Remove Start -->
                    <div class="cart-product-remove">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- Product Remove End -->

                </div>
                <!-- Cart Product/Price End -->

                <!-- Cart Product/Price Start -->
                <div class="cart-product-wrapper mb-6">

                    <!-- Single Cart Product Start -->
                    <div class="single-cart-product">
                        <div class="cart-product-thumb">
                            <a href="single-product.html"><img src="assets/images/products/small-product/3.jpg" alt="Cart Product"></a>
                        </div>
                        <div class="cart-product-content">
                            <h3 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h3>
                            <span class="price">
                            <span class="new">$20.00</span>
                            <span class="old">$21.00</span>
                            </span>
                        </div>
                    </div>
                    <!-- Single Cart Product End -->

                    <!-- Product Remove Start -->
                    <div class="cart-product-remove">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- Product Remove End -->

                </div>
                <!-- Cart Product/Price End -->

                <!-- Cart Product Total Start -->
                <div class="cart-product-total">
                    <span class="value">Subtotal</span>
                    <span class="price">220$</span>
                </div>
                <!-- Cart Product Total End -->

                <!-- Cart Product Button Start -->
                <div class="cart-product-btn mt-4">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0 w-100">View cart</a>
                    <a href="checkout.html" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Checkout</a>
                </div>
                <!-- Cart Product Button End -->

            </div>
            <!-- Offcanvas Cart Content End -->

        </div>
        <!-- Cart Offcanvas Inner End -->
    </div>
    <!-- Cart Offcanvas End -->


   <!-- Wishlist Start -->
   <div class="wishlist-offcanvas-wrapper">
    <div class="offcanvas-overlay"></div>

    <!-- Wishlist Inner Start -->
    <div class="cart-offcanvas-inner">

        <!-- Button Close Start -->
        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>
        <!-- Button Close End -->

        <!-- Offcanvas Cart Content Start -->
        <div class="offcanvas-cart-content">
            <div id="toBeReloadSection"  >
            <!-- Offcanvas Cart Title Start -->
            <h2 class="offcanvas-cart-title mb-10">Liked Items</h2>
            <!-- Offcanvas Cart Title End -->
          {{-- {{$wishlists}} --}}
          @if (Auth::check() && $wishlists!=null)
           @foreach ($wishlists as $wish)         
            <!-- Cart Product/Price Start -->
            <div class="cart-product-wrapper mb-6">

                <!-- Single Cart Product Start -->
                <div class="single-cart-product">
                    <div class="cart-product-thumb">
                         <a href="/show-single-post/{{$wish->user->name}}/{{$wish->posts->slug}}"><img src="../../cover/{{$wish->posts->cover}}" alt="Cart Product"></a>
                    </div>
                    <div class="cart-product-content">
                        
                        <h3 class="title"><a href="/show-single-post/{{$wish->user->name}}/{{$wish->posts->slug}}">{{$wish->posts->name}}</a></h3>
                        <span class="price">
                            <span id="regular-price"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$wish->posts->new_price}} </span>
                        <span class="old"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$wish->posts->old_price}}</span>
                        </span>
                    </div>
                </div>
                <!-- Single Cart Product End -->

                <!-- Product Remove Start -->
                <div class="cart-product-remove">
                    <a class="remove-from-wishlist" data-post-id="{{$wish->posts->id}}"><i class="fa fa-trash"></i></a>
               {{-- <button class="remove-from-wishlist"><i class="fa fa-trash"></i></button> --}}
                </div>
                <!-- Product Remove End -->

            </div>
        @endforeach
        @else
        <b>No Thing On Wishlist Yet!</b>
    @endif
    
            <!-- Cart Product/Price End -->

        </div>
        <!-- Offcanvas Cart Content End -->

    </div>
    <!-- Cart Offcanvas Inner End -->
</div>
<!-- Cart Offcanvas End -->
</div>

