@extends('layouts.app')
@section('content')
@section('title', $post->name)

<!-- Breadcrumb Section Start -->
<div class="section">
    <hr>
{{-- <a href="/redirect-to-previous" style="color: red">Back page</a> --}}
    <!-- Breadcrumb Area Start -->
    {{-- <div class="breadcrumb-area bg-light" > --}}
       {{-- <div class="container-fluid" >
             <div class="breadcrumb-content text-center">
                <h1 class="title">{{ $post->name }}</h1>
                <ul>
                    <li>
                        <a href="/">Home </a>
                    </li>
                    <li class="active"> Single Product</li>
                    <li class="active"> {{ $post->name }}</li>
                </ul>
            </div> 
        </div>--}}
    {{-- </div> --}}
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
                            @if (count($post->images) > 0)
                                @foreach ($post->images as $img)
                                    <a class="swiper-slide w-100" href="../../../../images/{{ $img->image }}">
                                        <img class="w-100" src="../../../../images/{{ $img->image }}"
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
                            @if (count($post->images) > 0)
                                @foreach ($post->images as $img)
                                    <div class="swiper-slide">
                                        <img src="../../images/{{ $img->image }}" alt="Productx" style="height: 100%">
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
                                <h2 class="product-title">{{ $post->name }}</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span id="regular-price"><img src="{{ asset('assets/images/logo/m-afg.png') }}"
                                        alt="Afg"> {{ $post->new_price }}</span>
                                <span id="old-price"> <del><img src="{{ asset('assets/images/logo/m-afg.png') }}"
                                            alt="Afg">{{ $post->old_price }}</del> </span>

                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>ProCode: {{ $post->puuid }}</span>
                            </div>
                            <!-- SKU End -->
                        </div>
                        <div class="col-md-7 owner-prifile">
                            <div class="user-profile">
                                <div class="profile-header">
                                    @if ($post->user->dp_image != null)
                                        <img src="../../dp_images/{{ $post->user->dp_image }}" alt="Profile Image">
                                    @else
                                        <img  src="../../assets/img/avatars/no-user-img.png" alt="user-avatar">
                                    @endif
                                    <br>
                                </div>
                                <div class="profile-body">
                                    <b> {{ $post->user->name }} </b>
                                    <div class="owner-contact-buttons">
                                              <a href="tel:+{{ $post->user->mobile }}"> <img src="{{ asset('assets/images/icons/telephone-symbol-button-main.png') }}" alt="Cat"></a>
                                              <a href="https://api.whatsapp.com/send?phone={{ $post->user->whatsapp }}" target="_blank"> <img src="{{ asset('assets/images/icons/whatsapp-main.png') }}" alt="Cat"></a>
                                              <a href="mailto:{{ $post->user->email }}"> <img src="{{ asset('assets/images/icons/email.png') }}" alt="Cat"></a>
                                  </div>

                            </div>
                        </div>
                            <div class="row">
                                <div class="col-12 ">
                                    @php
                                        $user = App\Models\User::where('id', $post->user_id)
                                            ->latest()
                                            ->first();
                                        //   echo ($user->id);
                                        $sellerb = App\Models\SellerBrand::where('user_id', $user->id)
                                            ->latest()
                                            ->first();
                                    @endphp
                                        
                                    @if ($sellerb != null)
                                        <a id="barnad-Name-on-single-post"
                                            href="/seller/comapany-info/{{ $sellerb->slug }}">Seller Brand Profile:
                                            {{ $sellerb->name }}</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description Start -->
                    <p class="desc-content mb-5 mt-5">  {{ $post->short_description }} </p>
                    <!-- Description End -->

                  

                    <!-- Product Color Variation Start -->
                    <div id="show-post-colors" class=" mb-3">
                        @php  $colors = json_decode($post->colors) @endphp
                        @if ($colors != null)
                            <b>Colors:</b>
                            @foreach ($colors as $col)
                                <div
                                    style="background-color:{{ $col }}; border: 2px solid {{ $col }};">
                                </div>
                            @endforeach
                        @else
                            <b>No Colors</b>
                        @endif
                    </div>
                    <!-- Product Color Variation End -->

                    <!-- Cart & Wishlist Button Start -->
                    <div class="cart-wishlist-btn mb-4">
                        <a data-post-id="{{ $post->id }}"
                            class="btn btn-outline-dark btn-hover-primary add-to-wishlist" href="javascript:void(0)">Add
                            to Wishlist</a>
                    </div>
                    <!-- Cart & Wishlist Button End -->

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

                    <!-- Product Delivery Policy Start -->
                    <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                        @if ($sellerb != null)

                            @if ($sellerb->security_policy != null)
                                <a href="/seller/comapany-info/{{ $sellerb->slug }}">
                                 <li> <i class="fa fa-check-square"></i><span>{!! Str::limit($sellerb->security_policy, 60 )!!}</span></li>
                            @endif
                            @if ($sellerb->delivery_policy != null)
                                <li><i class="fa fa-truck"></i><span>{!! Str::limit($sellerb->delivery_policy,60 )!!}</span></li>
                            @endif
                            @if ($sellerb->return_policy != null)
                                <li><i class="fa fa-refresh"></i><span>{!! Str::limit($sellerb->return_policy,60) !!}</span></li>
                               </a>
                            @endif
                        @endif
                    </ul>
                    <!-- Product Delivery Policy End -->

                </div>
                <!-- Product Summery End -->

            </div>
        </div>
        <div class="row section-margin">
            <!-- Single Product Tab Start -->
            <div class="col-lg-12 col-custom single-product-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content border p-3">
                            <p class="mb-3"> {!! $post->description !!}
                                <hr>
                                <table class="table  mb-0">
                                    <tbody>
                                        
                                            
                                        
                                        @php
                                            $title = json_decode($post->title, true);
                                            $title_desc = json_decode($post->title_desc, true);
                                        @endphp
                                        @if ($title !=null)
                                        @foreach ($title as $key => $value)
                                            <tr>
                                                <td class="cun-name"><span>{{ $value }}</span></td>
                                                <td>{{ $title_desc[$key] }}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>
    </div>
 
</div>
</div>


{{-- {{count($posts)}} --}}
@if (count($posts) >= 1)
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
                                        @foreach ($posts as $post)
                                            <div class="swiper-slide single-brand-logo" data-aos="fade-up"
                                                data-aos-delay="500">
                                                <div class="polaroid"><a
                                                        href="/show-single-post/{{ $post->subMenu->name }}/{{ $post->slug }}">
                                                        <img src="../../cover/{{ $post->cover }}"
                                                            alt="{{ $post->cover }}" style="width:100%">
                                                        <div class="container ">
                                                            <span id="price"> <img
                                                                    src="../../assets/images/logo/m-afg.png"
                                                                    alt="AFG"> {{ $post->new_price }}
                                                            </span>
                                                            </span><br>
                                                            <a href="/show-single-post/{{ $post->subMenu->name }}/{{ $post->slug }}"
                                                                style="color: green">
                                                                {{ $post->name }}</a></span><br>
                                                            {{-- <span class="desc">{{$post->name}}</span><br> --}}
                                                            <p>{!! Str::limit($post->short_description, 50) !!} </p>
                                                            {{-- {{ Str::limit($string, 100) }} --}}

                                                        
                                                        </div>
                                                </div></a>



                                            </div>
                                            <!-- Single Brand Logo End -->
                                        @endforeach
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

@endif


@include('layouts.inc.bottom-user-contact')
@endsection
