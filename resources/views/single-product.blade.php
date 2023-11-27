@extends("layouts.app")
@section("content")
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Single Product</h1>
                    <ul>
                        <li>
                            <a href="/index">Home </a>
                        </li>
                        <li class="active"> Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
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
                                @if (count($post->images)>0)
                                @foreach ($post->images as $img)
                                <a class="swiper-slide w-100" href="/images/{{ $img->image }}">
                                   <img class="w-100" src="/images/{{ $img->image }}" alt="Product" style="max-height: 500px">
                               </a>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                @if (count($post->images)>0)
                                @foreach ($post->images as $img)
                               <div class="swiper-slide">
                                <img src="/images/{{ $img->image }}" alt="Product" style="height: 100%">
                              </div>
                                @endforeach
                                @endif
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-horizental-next  swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-button-horizental-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
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
                                    <h2 class="product-title">{{$post->name}}</h2>
                                </div>
                                <!-- Product Head End -->

                                <!-- Price Box Start -->
                                <div class="price-box mb-2">
                                    <span id="regular-price"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg"> {{$post->new_price}}</span>
                                    <span id="old-price"> <del><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$post->old_price}}</del> </span>
                                  
                                </div>
                                <!-- Price Box End -->

                                <!-- Rating Start -->
                                <span class="ratings justify-content-start">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                </span>
                                <span class="rating-num">(4)</span>
                                </span>
                                <!-- Rating End -->

                                <!-- SKU Start -->
                                <div class="sku mb-3">
                                    <span>ProCode: {{$post->puuid}}</span>
                                </div>
                                <!-- SKU End -->
                            </div>
                            <div class="col-md-7 owner-prifile">
                                <div class="user-profile">
                                    <div class="profile-header">
                                      <img src="../dp_images/{{$post->user->dp_image}}" alt="Profile Image">
                                    </div>
                                    <div class="profile-body">
                                        <div>
                                            <b>{{$post->user->name}} </b> <br>
                                            <small>Contact Owner With:</small>
                                        </div>
                                        <div class="owner-contact-buttons">
                                            <a  href="https://api.whatsapp.com/send?phone={{$post->user->whatsapp}}" target="_blank"><button class="contact-btn whatsBtn"><i class="fa fa-whatsapp"></i></button></a>   
                                            <a href="mailto:{{$post->user->email}}"><button class="contact-btn mailBtn"><i class="pe-7s-mail"></i></button></a>   
                                            <a href="{{$post->user->mobile}}"><button class="contact-btn phoneBtn"><i class="pe-7s-phone"></i></button></a>   
                                          </div> 
                                      </div>
                                 
                                  </div>
                            </div>
                        </div>

                        <!-- Description Start -->
                        <p class="desc-content mb-5">
                            {!! $post->description!!}
                            {{-- I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. --}}
                        </p>
                        <!-- Description End -->

                        <!-- Product Meta Start -->
                        <div class="product-meta mb-3">
                            <!-- Product Size Start -->
                            {{-- <div class="product-size">
                                <span>Size :</span>
                                <a href=""><strong>S</strong></a>
                                <a href=""><strong>M</strong></a>
                                <a href=""><strong>L</strong></a>
                                <a href=""><strong>XL</strong></a>
                            </div> --}}
                            <!-- Product Size End -->
                        </div>
                        <!-- Product Meta End -->

                        <!-- Product Color Variation Start -->
                        <div class="product-color-variation mb-3">
                            {{-- <button type="button" class="btn bg-danger"></button>
                            <button type="button" class="btn bg-primary"></button>
                            <button type="button" class="btn bg-dark"></button>
                            <button type="button" class="btn bg-success"></button> --}}
                            @php  $colors = json_decode($post->colors) @endphp
                            <b>Colors:</b>
                            @if ($colors != null)
                            @foreach ($colors as $col)
                            <div id="show-post-colors" style="background-color:{{$col}}; border: 2px solid {{$col}};"></div>
                            @endforeach      
                            @else
                            <b>No Colors</b>
                            @endif
                        </div>
                        <!-- Product Color Variation End -->

                        <!-- Cart & Wishlist Button Start -->
                        <div class="cart-wishlist-btn mb-4">
                           
                            <div class="add-to-wishlist">
                                <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Add to Wishlist</a>
                            </div>
                        </div>
                        <!-- Cart & Wishlist Button End -->
                        <div class="size-tab table-responsive-lg">
                            <h4 class="title-3 mb-4">More Info:</h4>
                            <table class="table  mb-0">
                                <tbody>
                                    @php
                                    $title = json_decode($post->title,true);
                                    $title_desc = json_decode($post->title_desc,true);
                                    @endphp
                                 @foreach ($title as $key=> $value )
                                    <tr>
                                        <td class="cun-name"><span>{{$value}}</span></td>
                                        <td>{{$title_desc[$key]}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- start table of content -->
                        <!-- end table of content -->

                        <!-- Social Shear Start -->
                        <div class="social-share">
                            <span>Share :</span>
                            <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$currentUrl}}"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a  target="_blank" href="https://www.instagram.com/sharer/sharer.php?u={{$currentUrl}}"><i class="fa fa-instagram facebook-color"></i></a>
                            <a  target="_blank" href="https://twitter.com/share?u={{$currentUrl}}"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a  target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?u={{$currentUrl}}"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a  target="_blank" href="https://www.pinterest.com/pin/create/button/?u={{$currentUrl}}"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                             </div>
                        <!-- Social Shear End -->

                        <!-- Product Delivery Policy Start -->
                        <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                            <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                        </ul>
                        <!-- Product Delivery Policy End -->

                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>
            </div>
        </div>
    </div>
      <div class="container">
        <h2>You may also like!</h2>
        @include("layouts.inc.category-post")  
        @include("layouts.inc.category-post")  
      </div>
    <!-- Single Product Section End -->
    @include("layouts.inc.bottom-user-contact")
@endsection