<div class="section">
    <div class="hero-slider">
        <div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" id="swiper-wrapper-105a3492323db0381" aria-live="polite"
                style="transition: all 0ms ease 0s;">
  
  
                {{-- <div class="hero-slide-item-two swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                    data-swiper-slide-index="1" role="group" aria-label="1 / 4"
                    style="width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(0px, 0px, 0px);">
  
                    <!-- Hero Slider Background Image Start -->
                    <div class="hero-slide-bg">
                        <img src="../../assets/images/slider/slide-1-2.jpg" alt="">
                    </div>
                    <!-- Hero Slider Background Image End -->
  
                    <!-- Hero Slider Container Start -->
                    <div class="container">
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Trend Fashion <br>
                                    Collection
                                </h2>
                                <p>Up to 30% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark"
                                    previewlistener="true">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slider Container End -->
  
                </div> --}}
  
                <!-- Single Hero Slider Item Start -->
                {{-- <div class="hero-slide-item-two swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0"
                    role="group" aria-label="2 / 4"
                    style="width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-1485px, 0px, 0px);">
  
                    <!-- Hero Slider Background Image Start-->
                    <div class="hero-slide-bg">
                        <img src="../../assets/images/slider/slide-1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Background Image End-->
  
                    <!-- Hero Slider Container Start -->
                    <div class="container">
  
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Fashion New <br>
                                    Collection
                                </h2>
                                <p>Up to 70% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark"
                                    previewlistener="true">Shop Now</a>
                            </div>
                        </div>
  
                    </div>
                    <!-- Hero Slider Container End -->
  
                </div> --}}
                <!-- Single Hero Slider Item End -->
  
                @foreach ($slider as $slid )
                  
                <!-- Single Hero Slider Item Start -->
                <div class="hero-slide-item-two swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                    data-swiper-slide-index="1" role="group" aria-label="3 / 4"
                    style="width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-2970px, 0px, 0px);">
  
                    <!-- Hero Slider Background Image Start -->
                    <div class="hero-slide-bg">
                        <img src="../../../cover/slider/{{$slid->cover}}" alt="">
                    </div>
                    <!-- Hero Slider Background Image End -->
  
                    <!-- Hero Slider Container Start -->
                    <div class="container">
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    {{$slid->name}}
                                </h2>
                                <p>
                                   
                                    <b>{{$slid->note}}</b> <br> <br>
                                    Up to {{$slid->offer}} off selected Product
                                </p>
                                
                                <a href="{{$slid->url}}" class="btn btn-lg btn-primary btn-hover-dark"
                                    previewlistener="true">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slider Container End -->
  
                </div>
  
                @endforeach
  
                {{-- <div class="hero-slide-item-two swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                    data-swiper-slide-index="1" role="group" aria-label="3 / 4"
                    style="width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-2970px, 0px, 0px);">
  
                    <!-- Hero Slider Background Image Start -->
                    <div class="hero-slide-bg">
                        <img src="../../assets/images/slider/slide-1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Background Image End -->
  
                    <!-- Hero Slider Container Start -->
                    <div class="container">
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Trend Fashion <br>
                                    xxxx
                                </h2>
                                <p>Up to 30% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark"
                                    previewlistener="true">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slider Container End -->
  
                </div> --}}
  
                <!-- Single Hero Slider Item End -->
                {{-- <div class="hero-slide-item-two swiper-slide swiper-slide-duplicate swiper-slide-active"
                    data-swiper-slide-index="0" role="group" aria-label="4 / 4"
                    style="width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-4455px, 0px, 0px);">
  
                    <!-- Hero Slider Background Image Start-->
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slide-2.jpg" alt="">
                    </div>
                    <!-- Hero Slider Background Image End-->
  
                    <!-- Hero Slider Container Start -->
                    <div class="container">
  
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Fashion New <br>
                                    Collection
                                </h2>
                                <p>Up to 70% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark"
                                    previewlistener="true">Shop Now</a>
                            </div>
                        </div>
  
                    </div>
                    <!-- Hero Slider Container End -->
  
                </div> --}}
            </div>
  
            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-md-none swiper-pagination-clickable swiper-pagination-bullets"><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
            </div>
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