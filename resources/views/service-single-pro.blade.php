@extends('layouts.app')
@section('content')
@section('title', $pro->name)

<!-- Breadcrumb Section Start -->
<div class="section">
{{-- <a href="/redirect-to-previous" style="color: red">Back page</a> --}}
    <!-- Breadcrumb Area Start -->
    {{-- <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Single Product</h1>
                <ul>
                    <li>
                        <a href="/">Home </a>
                    </li>
                    <li class="active"> Single Product</li>
                    <li class="active"> {{ $pro->name }}</li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- Breadcrumb Area End -->
</div>
<!-- Breadcrumb Section End -->
<!-- Single Product Section Start -->
<div class="section section-margin">
    <div class="container">
        <span class="arrow-back-page">
            {{-- <a href="{{ route('goback') }}"><i class="fa fa-arrow-left"></i> Go Back </a> --}}
        </span>
        <div class="row">
            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-custom">
                <!-- Product Details Image Start -->
                <div class="product-details-img">

                    <!-- Single Product Image Start -->
                    <div class="single-product-img swiper-container gallery-top">
                        <div class="swiper-wrapper popup-gallery">
                            @if (count($images) > 0)
                                @foreach ($images as $img)
                                    <a class="swiper-slide w-100" href="../../../../../service-brand/{{$filePath}}/{{ $img->image }}">
                                        <img class="w-100" src="../../../../../service-brand/{{$filePath}}/{{ $img->image }}"
                                            alt="img-{{ $img->image }}" style="max-height: 500px">
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Single Product Image End -->

                    <!-- Single Product Thumb Start -->
                    <div class="single-product-thumb swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @if (count($images) > 0)
                                @foreach ($images as $img)
                                    <div class="swiper-slide">
                                        <img src="../../../service-brand/{{$filePath}}/{{ $img->image }}" alt="Productx" style="height: 100%">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- Next Previous Button Start -->
                        <div class="swiper-button-horizental-next  swiper-button-next"><i class="pe-7s-angle-right"></i>
                        </div>
                        <div class="swiper-button-horizental-prev swiper-button-prev"><i class="pe-7s-angle-left"></i>
                        </div>
                        <!-- Next Previous Button End -->

                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->
            </div>
            <div class="col-lg-6 col-custom">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                    <div class="row pt-0">
                        <div class="col-md-5">
                            <!-- Product Head Start -->



                            <div class="product-head mb-3">
                                <h2 class="product-title">{{ $pro->name }}</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span id="regular-price"><img src="{{ asset('assets/images/logo/m-afg.png') }}"
                                        alt="Afg"> {{ $pro->price }}</span>

                            </div>
                            <!-- Price Box End -->


                 
                        </div>
                        <div class="col-md-7 owner-prifile">
                            <div class="user-profile">
                                <div class="profile-header">
                                    @if ($brand->logo != null)
                                        <img src="../../../service-brand/logo/{{ $brand->logo}}" alt="Profile Image">
                                    @else
                                        <img src="../../assets/img/avatars/no-user-img.png" alt="user-avatar"
                                            class="d-block rounded " height="100" width="100" id="uploadedAvatar">
                                    @endif
                                    <br>
                                </div>
                                <div class="profile-body">
                                    <b> {{ $brand->brand_name }} </b>
                                    <div class="owner-contact-buttons">
                                              <a href="tel:+{{ $brand->phone_number }}"> <img src="{{ asset('assets/images/icons/telephone-symbol-button-main.png') }}" alt="Cat"></a>
                                              <a href="https://api.whatsapp.com/send?phone={{ $brand->whatsapp_number }}" target="_blank"> <img src="{{ asset('assets/images/icons/whatsapp-main.png') }}" alt="Cat"></a>
                                              <a href="mailto:{{ $brand->email }}"> <img src="{{ asset('assets/images/icons/email.png') }}" alt="Cat"></a>
                                  </div>

                            </div>

                            </div>
                        </div>
                    </div>

                    <!-- Description Start -->
                    <p class="desc-content mb-5">
                        {!! $pro->description !!}
                        {{-- I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. --}}
                    </p>
                    <!-- Description End -->

                    <!-- Product Meta Start -->
                    <div class="product-meta mb-3"></div>
                    <!-- Product Meta End -->



                    <!-- Cart & Wishlist Button Start -->
                    <div class="cart-wishlist-btn mb-4">
                        <a data-post-id="{{ $pro->id }}"
                            class="btn btn-outline-dark btn-hover-primary add-to-wishlist" href="javascript:void(0)">Add
                            to Wishlist</a>
                    </div>

                    <!-- end table of content -->

                    <!-- Social Shear Start -->
                    <div class="social-share">
                        <span>Share :</span>
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($currentUrl) }}"><i class="fa fa-facebook-square facebook-color"></i></a>
                        <a target="_blank" href="https://www.instagram.com/share?url={{ urlencode($currentUrl) }}"><i class="fa fa-instagram facebook-color"></i></a>
                        <a target="_blank" href="https://twitter.com/share?url={{ urlencode($currentUrl) }}"><i class="fa fa-twitter-square twitter-color"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($currentUrl) }}"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                        <a target="_blank" href="https://www.pinterest.com/pin/create/button/?url={{ urlencode($currentUrl) }}"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                    </div>
                    
                    <!-- Social Shear End -->


                </div>
                <!-- Product Summery End -->

            </div>
        </div>
    </div>
</div>
</div>
{{-- {{count($pros)}} --}}
{{-- @if (count($roomPro) >= 1) --}}
    <div class="container">
        <h2>You may also like!</h2>
        <!-- Brand Logo Start -->
        <div class="section">
            <div class="container">
                <div class="border-top">
                    <div class="row">
                        <div class="col-12 mt-5">
                            <!-- Brand Logo Wrapper Start -->
                            <div class="brand-logo-carousel">
                                <div class="swiper-container" style="padding-bottom: 15px">

                                    <div class="swiper-wrapper">

                                        <!-- Single Brand Logo Start -->
                                        @if (isset($foodPro))
                                            
                                        
                                        @foreach ($foodPro as $fpro)
                                            <div class="swiper-slide single-brand-logo" data-aos="fade-up"
                                                data-aos-delay="500">
                                                <div class="polaroid"><a
                                                        href="/show-service-single-pro/food-menu/{{$pro->name}}/{{$fpro->slug}}">
                                                        <img src="../../../service-brand/food-menu-cover/{{$fpro->cover}}" alt="{{$fpro->cover}}" style="width:100%">
                                                        <div class="container ">
                                                            <span id="price"> <img
                                                                    src="../../../assets/images/logo/m-afg.png"
                                                                    alt="AFG"> {{ $fpro->price }}
                                                            </span>
                                                            </span><br>
                                                            <a href="/show-service-single-pro/food-menu/{{$pro->name}}/{{$fpro->slug}}"
                                                                style="color: green">
                                                                {{ $fpro->name }}</a></span><br>
                                                         
                                                            <p>{!! Str::limit($fpro->description, 20) !!} </p>
                                                        </div>
                                                </div></a>
                                            </div>
                                            <!-- Single Brand Logo End -->
                                        @endforeach
                                        @else
                                        @foreach ($roomPro as $rpro)
                                            <div class="swiper-slide single-brand-logo" data-aos="fade-up"
                                                data-aos-delay="500">
                                                <div class="polaroid"><a
                                                        href="/show-service-single-pro/room-hall/{{$pro->name}}/{{$rpro->slug}}">
                                                        <img src="../../../service-brand/hotel-room-cover/{{$pro->cover}}" alt="{{$rpro->cover}}" style="width:100%">
                                                        <div class="container ">
                                                            <span id="price"> <img
                                                                    src="../../../assets/images/logo/m-afg.png"
                                                                    alt="AFG"> {{ $rpro->price }}
                                                            </span>
                                                            </span><br>
                                                            <a href="/show-service-single-pro/room-hall/{{$pro->name}}/{{$rpro->slug}}"
                                                                style="color: green">
                                                                {{ $rpro->name }}</a></span><br>
                                                         
                                                            <p>{!! Str::limit($rpro->description, 20) !!} </p>
                                                        </div>
                                                </div></a>
                                            </div>
                                            <!-- Single Brand Logo End -->
                                        @endforeach
                                        @endif
                                        <!-- Single Brand Logo End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Brand Logo Wrapper End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Logo End -->
    </div>

{{-- @endif --}}

<nav class="navbar-bottom-contact-user">
    <ul class="navbar-nav-bottom-contact">
          <a href="tel:+{{ $brand->phone_number }}"> <img src="{{ asset('assets/images/icons/telephone-symbol-button-main.png') }}" alt="Cat"></a>
          <a href="https://api.whatsapp.com/send?phone={{ $brand->whatsapp_number }}" target="_blank"> <img src="{{ asset('assets/images/icons/whatsapp-main.png') }}" alt="Cat"></a>
          <a href="mailto:{{ $brand->email }}"> <img src="{{ asset('assets/images/icons/email.png') }}" alt="Cat"></a>
    </ul>
  </nav
@endsection
