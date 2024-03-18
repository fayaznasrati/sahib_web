@extends('layouts.app')

@section('title', 'index')
@section('content')

{{-- <div class="section">
    
  <div class="hero-slider">
      <div class="swiper-container my-swiper-container  swiper-container-fade swiper-container-initialized swiper-container-horizontal">
          <div class="swiper-wrapper" id="swiper-wrapper-105a3492323db0381" aria-live="polite"
              style="transition: all 0ms ease 0s;">

              @foreach ($slider as $slid )
                
              <!-- Single Hero Slider Item Start -->
              <div class="hero-slide-item-two swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                  data-swiper-slide-index="" role="group" 
                  style=" width: 1485px; transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-2970px, 0px, 0px);">

                  <!-- Hero Slider Background Image Start -->
                  <div class="hero-slide-bg" style="height:300px;" >
                      <img src="../../../cover/slider/{{$slid->cover}}" alt="">
                     
                  </div>
              </div>

              @endforeach

          </div>
                 
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


</div> --}}




<swiper-container class="mySwiper mobile-design" direction="vertical" pagination="true" pagination-clickable="true">
    @foreach ($slider as $slid )
   <img class="swiper-slide" src="../../../mobileCover/slider/{{ $slid->mobileCover }}"  alt="{{$slid->name}}">
   @endforeach
</swiper-container> 


<div class="mobile-design">
    @include('layouts.inc.mobile.categories')
  </div>
  
{{-- =========================== --}}

    <div class="mobile-design">
      @include('layouts.inc.mobile.banner')
    </div> 

  <div class="mobile-design">
      @include('layouts.inc.mobile.product-a')
  </div>

  <div class="mobile-design mobil-ads">
    <a href="http://"> <img src="{{asset('assets/images/banner/ad18.webp')}}" alt="Cat"></a>
    <a href="http://"> <img src="{{asset('assets/images/banner/ad16.webp')}}" alt="Cat"></a>
   </div>

  <div class="mobile-design">
      @include('layouts.inc.mobile.product-a')
  </div>

  <div class="mobile-design mobil-ads">
     <a href="http://"> <img src="{{asset('assets/images/banner/ad14.webp')}}" alt="Cat"></a>
     <a href="http://"> <img src="{{asset('assets/images/banner/ad19.webp')}}" alt="Cat"></a>
    </div>

  <div class="mobile-design">
      @include('layouts.inc.mobile.product-a')
  </div>

   <div class="mobile-design mobil-ads">
     <a href="http://"> <img src="{{asset('assets/images/banner/ad14.webp')}}" alt="Cat"></a>
     <a href="http://"> <img src="{{asset('assets/images/banner/ad17.webp')}}" alt="Cat"></a>
    </div>


@endsection
