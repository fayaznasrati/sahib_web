<div class="header section">
 
        <span  class="overlay-logo">
            <img src="{{asset('assets/images/logo/logo_2.png')}}" alt="Sahib.af Logo" />
        </span>
       
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
                <div class="container col-md-2"></div>
                     <div class="container col-md-7">
                        <form action="/search" method="post" >@csrf
                          <span class="all-search-box" style="margin-right: 40px">
                              <input  type="search" name="query" id="autocomplete" placeholder="search anything here..." class="input-with-icon">
                              <button type="submit" class="search-button">Search</button>
                              <span id="search-results"></span>
                          </span>
                        </form>
                         </div>
                         <div class="col-md-2" >
                              <!-- Header Action Start -->

                            <div class="header-actions ">

   
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
                        <div class="header-logo">
                            <a href="/"  ><img src="{{asset('assets/images/logo/logo_2.png')}}" alt="Sahib.af Logo" /></a>
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
                                     <li class="has-children position-static"  > <a href="#"><span>{{$topMenu->name}}</span> <i class="fa fa-angle-down"></i></a>
                                @else
                                    <li ><a href="{{$topMenu->url}}"><span>{{$topMenu->name}}</span></a>
                                @endif
                               
                                   
                                    
                                    <ul class="mega-menu row"  >
                                        <div class="col-md-8" >
                                            <div class="row" >
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
                        <div class="header-actions" style="margin-top: -20px">


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
                        <li class="has-children">
                            <a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                <li><a href="/my-wishlist">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="404-error.html">Error 404</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login-register.html">Loging | Register</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <!-- Language, Currency & Link Start -->
            <div class="offcanvas-lag-curr mb-6">
                <h2 class="title">Languages</h2>
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Romanian</a></li>
                        </ul>
                    </div>
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Language, Currency & Link End -->

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                    <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                </ul>
                <!-- Contact Links End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
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

