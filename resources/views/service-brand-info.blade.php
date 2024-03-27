@extends("layouts.app")
@section('title', $brand->brand_name)
@section("content")
    <!-- Breadcrumb Section Start -->
    <div class="pc-design">
      <div class="section">
        <div class="hero-slider " >
            <div  class="swiper-container my-swiper-container  swiper-container-fade swiper-container-initialized swiper-container-horizontal service-brand">
                <div class="swiper-wrapper" id="swiper-wrapper-105a3492323db0381" aria-live="polite"
                    style="transition: all 0ms ease 0s;">
                    @foreach ($brand->brandGalleryImages as $slid )
                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                        data-swiper-slide-index="3" role="group" >
                        <!-- Hero Slider Background Image Start -->
                        {{-- <div class="hero-slide-bg" style="object-fit:cover" > --}}
                            <img  src="../../../service-brand/gallery/{{$slid->image}}" alt="{{$slid->image}}">
                        {{-- </div>   --}}
                    </div>
                    @endforeach
                </div>
            
                <!-- Swiper Pagination Start d-md-none -->
                <div class="swiper-pagination  swiper-pagination-clickable "></div>
                <!-- Swiper Pagination End -->
            
                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none" tabindex="0"
                    role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-105a3492323db0381"><i
                        class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none" tabindex="0"
                    role="button" aria-label="Next slide" aria-controls="swiper-wrapper-105a3492323db0381"><i
                        class="pe-7s-angle-right"></i></div>
                <!-- Swiper Navigation End -->
    
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
     </div>
   </div>
  <div class="mobile-design">
    <swiper-container class="mySwiper mobile-design" direction="vertical" pagination="true" pagination-clickable="true" autoplay="true" :delay="5000"> <!-- Adjust delay as per your requirement -->
        @foreach ($brand->mobileBrandGalleryImages as $slid)
            <img class="swiper-slide" src="../../../service-brand/mobile-gallery/{{$slid->image}}" alt="{{ $slid->name }}">
        @endforeach
    </swiper-container>
  </div>

       <!-- About Section Start -->
       <div class="section section-margin overflow-hidden">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-7 col-lg-7 align-self-center mb-6" data-aos="fade-right" data-aos-delay="600">
                    <div class="about_content">
                        <h2 class="title">About {{$brand->brand_name}}</h2>
                        <div>{!! $brand->about!!}</div>
                     </div>
                </div>
                <div class="col-md-5 col-lg-5 mb-6" data-aos="fade-left" data-aos-delay="600">
                    <div class="about_thumb">
                        <img class="fit-image" style="border-radius: 10px;" src="../../service-brand/logo/{{$brand->logo}}" alt="{{$brand->name}}">
                    </div>
                </div>
            </div>
        </div>
       </div>

        <!-- Rooms And Halls Start -->
        @if (count($brand->hotelRoomAndHall )>=1)
        <div class="section">
            <div class="container">
                <div class="border-top" >
                    <div class="row" >
                        <div class="col-12 mt-5">
                        <h5>products  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                            <!-- Brand Logo Wrapper Start -->
                            <div class="brand-logo-carousel">
                                <div class="swiper-container" style="padding-bottom: 15px">
                                
                                <div class="swiper-wrapper" >

                                    <!-- Single Brand Logo Start -->
                                    @foreach ($brand->hotelRoomAndHall as $room)
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                    <div class="polaroid"><a href="/show-single-post/room-hall/{{$brand->brand_name}}/{{$room->slug}}">
                                        <img src="../../service-brand/hotel-room-cover/{{$room->cover}}" alt="{{$room->cover}}" style="width:100%; max-height:150px; object-fit:cover">
                                        <div class="container ">
                                            <a href="/show-service-single-pro/room-hall/{{$brand->brand_name}}/{{$room->slug}}"style="color: green"><br>
                                            {!! Str::limit($room->name, 50) !!}</a></span><br>
                                        </div>
                                    </div>
                                        </a>
                                    </div>
                                    <!-- Single Brand Logo End -->
                                    @endforeach

                                </div>
                                </div>
                            </div>
                            <!-- Brand Logo Wrapper End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Room and Hall Ends -->

        <!-- Food and Menu Start -->
        @if (count($brand->foodMenu )>=1)
        <div class="section">
        <div class="container">
            <div class="border-top" >
                <div class="row" >
                    <div class="col-12 mt-5">
                        <h5>Food And Menus  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                        <!-- Brand Logo Wrapper Start -->
                        <div class="brand-logo-carousel">
                            <div class="swiper-container" style="padding-bottom: 15px">
                                
                                <div class="swiper-wrapper" >

                                <!-- Single Brand Logo Start -->
                                @foreach ($brand->foodMenu as $room)
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                    <div class="polaroid"><a href="/show-service-single-pro/food-menu/{{$brand->brand_name}}/{{$room->slug}}">
                                    <img src="../../service-brand/food-menu-cover/{{$room->cover}}" alt="{{$room->cover}}" style="width:100%">
                                    <div class="container ">
                                        <a href="/show-service-single-pro/food-menu/{{$brand->brand_name}}/{{$room->slug}}"style="color: green"><br>
                                        {!! Str::limit($room->name, 50) !!}</a></span><br>
                                    </div>
                                    </div>
                                        </a>
                                </div>
                                <!-- Single Brand Logo End -->
                                @endforeach

                            </div>
                            </div>
                        </div>
                        <!-- Brand Logo Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endif

        <!-- Room and Hall Ends -->
        <!-- Contact Us Section Start -->
        <div class="section section-margin">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-lg-12 mb-10">
                        <!-- Section Title Start -->
                        <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title pb-3">Description of Brand</h2>
                            <span></span>
                            <div class="title-border-bottom"></div>
                        </div>
                        <!-- Section Title End -->
                        <!-- Contact Information Wrapper Start -->
                        <div class="row contact-info-wrapper mb-n6">
    
                            <!-- Single Contact Information Start -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 single-contact-info " data-aos="fade-up" data-aos-delay="300">
                                <!-- Single Contact Icon Start -->
                                    <p>{!!$brand->description!!}</p>
                            </div>    
                        </div>
                        <!-- Contact Information Wrapper End -->
                    </div>
                </div>
            </div>
            </div>
            <!-- Contact us Section End -->
        <!-- Contact Us Section Start -->
        <div class="section section-margin">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-lg-12 mb-10">
                        <!-- Section Title Start -->
                        <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title pb-3">Brand Contact Info</h2>
                            <span></span>
                            <div class="title-border-bottom"></div>
                        </div>
                        <!-- Section Title End -->
                        <!-- Contact Information Wrapper Start -->
                        <div class="row contact-info-wrapper mb-n6">
    
                            <!-- Single Contact Information Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="300">
    
                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <!-- Single Contact Icon End -->
    
                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Postal Address</h4>
                                    <p class="desc-content">{{$brand->address}}</p>
                                </div>
                                <!-- Single Contact Title Content End -->
    
                            </div>
                            <!-- Single Contact Information End -->
    
                            <!-- Single Contact Information Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">
    
                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <!-- Single Contact Icon End -->
    
                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Contact Us Anytime</h4>
                                    <p class="desc-content">Mobile: {{$brand->phone_number}}<br>
                                                            Whatsapp: {{$brand->whatsapp_number}}</p>
                                </div>
                                <!-- Single Contact Title Content End -->
    
                            </div>
                            
                            <!-- Single Contact Information End -->
    
                            <!-- Single Contact Information Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="500">
    
                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <!-- Single Contact Icon End -->
    
                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Support Overall</h4>
                                    <p class="desc-content">
                                        <a href="mailto:{{$brand->email}}">{{$brand->email}}</a>
                                        {{-- <a href="#">Support24/7@example.com</a> <br><a href="#">info@example.com</a> --}}
                                    </p>
                                </div>
                                <!-- Single Contact Title Content End -->
    
                            </div>
                            <!-- Single Contact Information End -->
    
                        </div>
                        <!-- Contact Information Wrapper End -->
                    </div>
                </div>
            </div>
            </div>
            <!-- Contact us Section End -->

  
   
    <!-- Single Product Section End -->
    <nav class="navbar-bottom-contact-user">
        <ul class="navbar-nav-bottom-contact">
              <a href="tel:+{{ $brand->user->mobile }}"> <img src="{{ asset('assets/images/icons/telephone-symbol-button-main.png') }}" alt="Cat"></a>
              <a href="https://api.whatsapp.com/send?phone={{ $brand->user->whatsapp }}" target="_blank"> <img src="{{ asset('assets/images/icons/whatsapp-main.png') }}" alt="Cat"></a>
              <a href="mailto:{{ $brand->user->email }}"> <img src="{{ asset('assets/images/icons/email.png') }}" alt="Cat"></a>
        </ul>
      </nav
 

@endsection

