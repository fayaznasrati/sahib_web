@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

    <!-- Breadcrumb Section Start -->
    <div class="section">

  <!-- Breadcrumb Section End -->
  <!-- Single Product Section Start -->
  <div class="section section-margin">
      <div class="container">
          <span class="arrow-back-page">
              <a href="/post"><i class="fa fa-arrow-left"></i> Go Back </a>
          </span>
          <div class="row">
              <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-custom">
                  <!-- Product Details Image Start -->
                  <div class="product-details-img">

                      <!-- Single Product Image Start -->
                      <div class="single-product-img swiper-container gallery-top">
                          <div class="swiper-wrapper popup-gallery">
                           @if (count($posts->images)>0)
                           @foreach ($posts->images as $img)
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
                           @if (count($posts->images)>0)
                           @foreach ($posts->images as $img)
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
                          <div class="col-md-12">
                              <!-- Product Head Start -->
                              <div class="product-head mb-3">
                                  <h2 class="product-title">{{$posts->name}}</h2>
                                  <b>Category: </b>{{$posts->menu->name}} <br>
                                <b>  Subcategory:</b> {{$posts->subMenu->name}}
                              </div>
                              <!-- Product Head End -->

                              <!-- Price Box Start -->
                              <div class="price-box mb-2">
                                <b>price: </b>  <span id="regular-price"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg"> {{$posts->new_price}} </span><br>
                                 <b>old price: </b> <span id="old-price"> <del><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$posts->old_price}}</del> </span>
                              </div>
                              <!-- Price Box End -->
                              <!-- SKU Start -->
                              <div class="sku mb-3">
                                  <span><b>ProCode:</b> {{$posts->puuid}}</span>
                              </div>
                              <!-- SKU End -->
                          </div>
                      </div>

                      <!-- Description Start -->
                      <p class="desc-content mb-5"><b>Description: </b> {!! $posts->description!!}</p>
                      <!-- Description End -->
                      <!-- Product Color Variation Start -->
                        <div id="show-post-colors">
                           @php  $colors = json_decode($posts->colors) @endphp
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
                      <div class="size-tab table-responsive-lg">
                          <h4 class="title-3 mb-4"><b>Fetures</b></h4>
                          <table class="table  mb-0">
                              <tbody>
                                 @php
                                 $title = json_decode($posts->title,true);
                                 $title_desc = json_decode($posts->title_desc,true);
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
                          {{-- <a href="https://www.facebook.com/sharer/sharer.php?u={{$currentUrl}}" target="_blank" rel="noopener noreferrer">
                           Share on Facebook instagram://library?AssetPath
                         </a> --}}
                      </div>
                      <!-- Social Shear End -->
                  </div>
                  <!-- Product Summery End -->

              </div>
          </div>
          </div>
      </div>
  </div>
@endsection

