


      <!-- residentForRent Start -->
     @if (count($residentForRent)>=1)
      <div class="section">
        <div class="container">
            <div class="border-top" >
                <div class="row" >
                    <div class="col-12 mt-5">
                      <h5>Residentioals for Rent  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                        <!-- Brand Logo Wrapper Start -->
                        <div class="brand-logo-carousel">
                            <div class="swiper-container" style="padding-bottom: 15px">
                              
                              <div class="swiper-wrapper" >
      
                                <!-- Single Brand Logo Start -->
                                @foreach ($residentForRent as $post ) 
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                  <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                    <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                    <div class="container ">
                                      <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                       </span>
                                       </span><br>
                                        <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}"style="color: green"><br>
                                        {!! Str::limit($post->name, 50) !!}</a></span><br>
                                       {{-- <span class="desc">{!! Str::limit($post->name, 30) !!}</span><br> --}}
                                     {{-- <p>{!! Str::limit($post->note, 30) !!} </p> --}}
                                     {{-- {{ Str::limit($string, 100) }} --}}
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
      <!-- residentForRent End -->
 
      @include('layouts.inc.mobile.pc-banner')
       
        <!-- residentForSell Start -->
     @if (count($residentForSell)>=1)
     <div class="section">
      <div class="container">
          <div class="border-top">
              <div class="row">
                  <div class="col-12 mt-5">
                    <h5>Residentioals for sell  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                      <!-- Brand Logo Wrapper Start -->
                      <div class="brand-logo-carousel">
                          <div class="swiper-container" style="padding-bottom: 15px">
                            
                              <div class="swiper-wrapper" >
                                    <!-- Single Brand Logo Start -->
                                    @foreach ($residentForSell as $post ) 
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                      <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                        <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                        <div class="container ">
                                          <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                           </span>
                                           </span><br>
                                            <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}"style="color: green">
                                            {!! Str::limit($post->name, 50) !!}</a></span><br>
                                           {{-- <span class="desc">{!! Str::limit($post->name, 30) !!}</span><br> --}}
                                          {{-- <p>{!! Str::limit($post->note, 30) !!} </p> --}}
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

        @include('layouts.inc.mobile.pc-banner')
    
     <!-- motors Start -->
     @if (count($motors)>=1)
         <div class="section">
            <div class="container">
                <div class="border-top">
                    <div class="row" >
                        <div class="col-12 mt-5" style="padding:10px 0px 10px 10px" >
                          <h5>Motors for Sell  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                            <!-- Brand Logo Wrapper Start -->
                            <div class="brand-logo-carousel" >
                                <div class="swiper-container" style="padding-bottom: 15px">
                                  
                                    <div class="swiper-wrapper" >
      
                                        <!-- Single Brand Logo Start -->
                                        @foreach ($motors as $post ) 
                                        <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                          <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                            <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" >
                                            <div class="container " style="text-align: left">
                                              <span id="price">
                                                 <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                                 @if ($post->old_price !=null)
                                                 <img src="assets/images/logo/m-afg.png" alt="AFG" ><span class="old" id="old_price">{{$post->old_price}}</span>
                                                   
                                                 @endif
                                              </span>
                                              
                                               <br>
                                                <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" style="color: green"> <br>
                                                {!! Str::limit($post->name, 50) !!}</a></span><br>
                                                {{-- <span class="ratings">
                                                   <span class="rating-wrap">
                                                    <span class="star" style="width: 67%"></span>
                                                  </span> 
                                                    <span class="rating-num">(2)</span></span>--}}
                                             {{-- <p>{!! Str::limit($post->note, 30) !!} </p> --}}

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
     @include('layouts.inc.mobile.pc-banner')
