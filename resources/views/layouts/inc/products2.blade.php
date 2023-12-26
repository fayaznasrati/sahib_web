


      <!-- residentForRent Start -->
     @if (count($residentForRent)>=1)
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
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                  <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                    <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                    <div class="container ">
                                      <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                       </span>
                                       </span><br>
                                        <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                        {{$post->name}}</a></span><br>
                                       {{-- <span class="desc">{{$post->name}}</span><br> --}}
                                     <p>{!! Str::limit($post->note, 30) !!} </p>
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
 
       
        <!-- residentForSell Start -->
     @if (count($residentForSell)>=1)
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
                                    @foreach ($residentForSell as $post ) 
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                      <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                        <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                        <div class="container ">
                                          <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                           </span>
                                           </span><br>
                                            <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                            {{$post->name}}</a></span><br>
                                           {{-- <span class="desc">{{$post->name}}</span><br> --}}
                                         <p>{!! Str::limit($post->note, 50) !!} </p>
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
                                        <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                          <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                            <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                            <div class="container ">
                                              <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                               </span>
                                               </span><br>
                                                <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" style="color: green">
                                                {{$post->name}}</a></span><br>
                                               {{-- <span class="desc">{{$post->name}}</span><br> --}}
                                             <p>{!! Str::limit($post->note, 50) !!} </p>
                                             {{-- {{ Str::limit($string, 100) }} --}}

                                             <br>
                                             <center>
                                             <div class="shop-list-btn mb-5">
                                               <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                              </div>
                                             </center>
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
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                      <div class="polaroid"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                        <img src="../cover/{{$post->cover}}" alt="{{$post->cover}}" style="width:100%">
                                        <div class="container ">
                                          <span id="price"> <img src="assets/images/logo/m-afg.png" alt="AFG" > {{$post->new_price}}
                                           </span>
                                           </span><br>
                                            <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                            {{$post->name}}</a></span><br>
                                           {{-- <span class="desc">{{$post->name}}</span><br> --}}
                                         <p>{!! Str::limit($post->note, 50) !!} </p>
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
