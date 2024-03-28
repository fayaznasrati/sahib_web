@extends('layouts.app')

@section('title', 'the-factories')
@section('content')



    {{-- Pc Slider --}}
    <div class="pc-design">
        <div class="section">
            <div class="hero-slider">
                <div style="height: 400px"
                    class="swiper-container my-swiper-container  swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-105a3492323db0381" aria-live="polite"
                        style="transition: all 0ms ease 0s;">

                        @foreach ($slider as $slid)
                            <!-- Single Hero Slider Item Start -->
                            <div class="hero-slide-item-two swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                data-swiper-slide-index="3" role="group">
                                {{-- style=" transition: all 0ms ease 0s; opacity: 1; transform: translate3d(-2970px, 0px, 0px);"> --}}

                                <!-- Hero Slider Background Image Start -->
                                <div class="hero-slide-bg" style="object-fit: cover;width: 100%;">
                                    <img src="../../../cover/slider/{{ $slid->cover }}" alt="">
                                </div>
                                <!-- Hero Slider Background Image End -->

                                <!-- Hero Slider Container Start -->
                                <div class="container">
                                    <div class="row">
                                    </div>
                                </div>
                                <!-- Hero Slider Container End -->

                            </div>
                        @endforeach

                    </div>

                    <!-- Swiper Pagination Start d-md-none -->
                    <div class="swiper-pagination  swiper-pagination-clickable swiper-pagination-bullets"></div>
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

    {{-- mobile Slider --}}
    <div class="mobile-design">
        <swiper-container class="mySwiper mobile-design" direction="vertical" pagination="true" pagination-clickable="true"
            autoplay="true" :delay="5000">
            @foreach ($slider as $slid)
                <img class="swiper-slide" src="../../../mobileCover/slider/{{ $slid->mobileCover }}"
                    alt="{{ $slid->name }}">
            @endforeach
        </swiper-container>
    </div>

    {{-- PC banner --}}
    <p style="color: white">.</p>
    <div class="pc-design">
        <div class="ad_banners_card">
            @foreach ($pc_banners as $banner)
                <a href="{{ $banner->url }}">
                    <img src="../../../cover/banner/{{ $banner->cover }}" alt="{{ $banner->name }}">
                </a>
            @endforeach
        </div>
    </div>

    {{-- Mobil banner --}}
    <div class="mobile-design">
        <div class="banners-scrolling-wrapper">
            @foreach ($pc_banners as $banner)
                <div class="banners_my_card"><a href="{{ $banner->url }}">
                        <img src="../../../mobileCover/banner/{{ $banner->mobileCover }}" alt="{{ $banner->name }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Mobil Products --}}
    <div class="mobile-design">
        <div class="mobile-card-title-header">
            <a href="">Pupolar Products</a>
            <a href="" id="have-main-color">View All <i class="fa fa-arrow-right myCatArrow" id="arrow-right"
                    style="font-size:15   px" aria-hidden="true"></i> </a>
        </div>
        <div class="scrolling-wrapper">
            @foreach ($posts as $post)
                <div class="my_card"><a href="/show-single-post/{{ $post->subMenu->name }}/{{ $post->slug }}">
                        <img src="../../cover/{{ $post->cover }}" alt="{{ $post->cover }}" class="my_card__image"
                            alt="" />
                        <div class="card__overlay_desc">
                            <div class="pro_title">
                                <b>{{ strlen($post->name) > 20 ? Str::limit($post->name, 20) : $post->name }}</b>
                            </div>
                            <b class="pro_price"><img style="height: 15px; width:15px" src="assets/images/logo/m-afg.png"
                                    alt="AFG">{{ $post->new_price }} </b>
                            <b class="old_pro_price"><img style="height: 15px; width:15px"
                                    src="assets/images/logo/m-afg.png" alt="AFG">{{ $post->new_price }} </b>
                            <div class="pro_location">

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    {{-- Pc Products --}}

    <div class="pc-design ">
        <!-- Footer Section Start -->
        <div class="section">
            <!-- Footer Top Start -->
            <div class="section-padding">
                <div class="container">
                    <div class="row mb-n10">
                        @if (count($posts) > 0)
                        <div class="row mydata">
                        @foreach ($posts as $post)
                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-6 ">
                                <div class="card" style="margin-bottom:20px;"> 
                                    <img src="../../cover/{{$post->cover}}" alt="{{$post->cover}}" style="max-height: 100px;object-fit: cover;">
                                    <div class="container m-1" style="text-align: left;">
                                        <a href="/service/brand-info/{{$post->slug}}" style="font-size:11px;">
                                            <label style="color:green;">{{ strlen($post->name) > 19 ? substr($post->name, 0, 19) . '...' : $post->name }}</label>                  </a><br>
                                        <span style="color:rgb(117, 22, 9)"><img src="assets/images/logo/m-afg.png" alt="AFG"  style="height:15px; width:15px;color:green">{{$post->new_price}}</span>
                                    </div> 
                                </div>
                            </div>
                        @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- <div class="border-top" >
                @if (count($posts) > 0)
                <div class="row mydata">
                @foreach ($posts as $post)
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-6 ">
                        <div class="card" style="margin-bottom:20px;"> 
                            <img src="../../cover/{{$post->cover}}" alt="{{$post->cover}}" style="max-height: 100px;object-fit: cover;">
                            <div class="container m-1" style="text-align: left;">
                                <a href="/service/brand-info/{{$post->slug}}" style="font-size:11px;">
                                    <label style="color:green;">{{ strlen($post->name) > 20 ? substr($post->name, 0, 20) . '...' : $post->name }}</label>                  </a><br>
                                <span style="color:rgb(117, 22, 9)"><img src="assets/images/logo/m-afg.png" alt="AFG"  style="height:15px; width:15px;color:green">{{$post->new_price}}</span>
                            </div> 
                        </div>
                    </div>
                @endforeach
                </div>
                @endif
            </div> --}}
        </div>
    </div>







@endsection
