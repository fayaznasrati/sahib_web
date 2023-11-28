@extends("layouts.app")
@section("content")

<div class="section">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <center class="all-search-box">
                <input type="text" placeholder="search anything here..." class="input-with-icon">
                <button class="search-button">Search</button>
             </center>
           </div>
        </div><hr>
    </div>
</div>
<div class="section">
    <div class="container">
        <h4 id="popular-categories-title">Popular Categories</h4>
        <div class="row parent-popular-category">
            @foreach ($menus as $menu )
            <div class="col-md-3 popular-category">
                <ul><small class="categroy-name">
                       <img src="../../../menu-icon/{{$menu->icon}}" alt="menu icon" style="height: auto; width:20px">
                     </small>
                    <a href="{{$menu->url}}"> <b class="cat-title">{{$menu->name}}</b></a>
                     <div class="categroy-name-list">
                   @foreach ($menu->submenu as $submenu)
                    <li>
                      {{-- <a href="{{$submenu->url}}" target="_blank" rel="Category Name">{{$submenu->name}}</a></li> --}}
                      <a href="{{ route('show-all-subcategory-posts', ['id' => $submenu->id]) }}" target="_blank" rel="Category Name">{{$submenu->name}}</a></li>
                    @endforeach                    
                    <li><a href="{{$menu->url}}" target="_blank" rel="Category Name">See All
                    <i class="fa fa-arrow-right" id="arrow-right" aria-hidden="true"></i>
                    </a></li>
                    </div>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

      <!-- residentForRent Start -->
     @if (count($residentForSell)>=1)
      <div class="section">
        <div class="container">
            <div class="border-top">
                <div class="row">
                    <div class="col-12 mt-5">
                      <h5>Residentioals for Rent  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                        <!-- Brand Logo Wrapper Start -->
                        <div class="brand-logo-carousel">
                            <div class="swiper-container" style="padding-bottom: 15px">
                              
                                <div class="swiper-wrapper" >
  
                                    <!-- Single Brand Logo Start -->
                                    @foreach ($residentForRent as $post ) 
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                      <div class="polaroid"><a href="{{ route('show-single-post', ['id' => $post->id]) }}">
                                        <img src="../cover/{{$post->cover}}" alt="Norway" style="width:100%">
                                        <div class="container ">
                                          <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                           </span>
                                           </span><br>
                                          
                                           <span class="desc">{{$post->name}}</span><br>
                                         <small class="address">{!! Str::limit($post->description, 30) !!} </small>
                                         {{-- {{ Str::limit($string, 100) }} --}}
                                        </div>
                                      </div></a>
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
      <!-- residentForRent End -->
 
       
        <!-- residentForSell Start -->
     @if (count($residentForRent)>=1)
        <div class="section">
            <div class="container">
                <div class="border-top">
                    <div class="row">
                        <div class="col-12 mt-5">
                          <h5>Residentioals for Sell  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                            <!-- Brand Logo Wrapper Start -->
                            <div class="brand-logo-carousel">
                                <div class="swiper-container" style="padding-bottom: 15px">
                                  
                                    <div class="swiper-wrapper" >
      
                                        <!-- Single Brand Logo Start -->
                                        @foreach ($residentForSell as $post ) 
                                        <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                          <div class="polaroid"><a href="{{ route('show-single-post', ['id' => $post->id]) }}">
                                            <img src="../cover/{{$post->cover}}" alt="Norway" style="width:100%">
                                            <div class="container ">
                                              <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                               </span>
                                               </span><br>
                                              
                                               <span class="desc">{{$post->name}}</span><br>
                                             <small class="address">{!! Str::limit($post->description, 30) !!} </small>
                                             {{-- {{ Str::limit($string, 100) }} --}}
                                            </div>
                                          </div></a>
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
        <!-- residentForSell End -->
       
    
       <!-- motors Start -->
     @if (count($motors)>=1)
         <div class="section">
            <div class="container">
                <div class="border-top">
                    <div class="row">
                        <div class="col-12 mt-5">
                          <h5>Motors for Sell  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                            <!-- Brand Logo Wrapper Start -->
                            <div class="brand-logo-carousel">
                                <div class="swiper-container" style="padding-bottom: 15px">
                                  
                                    <div class="swiper-wrapper" >
      
                                        <!-- Single Brand Logo Start -->
                                        @foreach ($motors as $post ) 
                                        <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                          <div class="polaroid"><a href="{{ route('show-single-post', ['id' => $post->id]) }}">
                                            <img src="../cover/{{$post->cover}}" alt="Norway" style="width:100%">
                                            <div class="container ">
                                              <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                               </span>
                                               </span><br>
                                              
                                               <span class="desc">{{$post->name}}</span><br>
                                             <small class="address">{!! Str::limit($post->description, 30) !!} </small>
                                             {{-- {{ Str::limit($string, 100) }} --}}
                                            </div>
                                          </div></a>
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
       <!-- motors End --> 
        
 @include("layouts.inc.category-post")

 @include("layouts.inc.special-products") 
 @include("layouts.inc.category-post") 
 @include("layouts.inc.companies-banner") 
 @include("layouts.inc.category-post")  
 @include("layouts.inc.fullwidth-banner")  
 @include("layouts.inc.category-post")  
 

@endsection