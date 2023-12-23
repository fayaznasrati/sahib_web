
{{-- <ul>

  @foreach ($menus as $menu)

    
  <li style="color: red">{{$menu->name}}</li>
  <ul>
    @foreach ($menu->submenu as $sub)
      <li style="color: green">{{$sub->name}}</li>
      <ul>
       @foreach ($sub->posts as $post )
          @if($post->status == 1)
         <li style="color: yellow">{{$post->name}}</li>
         @endif
       @endforeach
      </ul>
    @endforeach
  </ul>

  @endforeach
</ul> --}}
@foreach ($menus as $menu)

@if (count($menu->submenu)>0)
 <div class="section">
    <div class="container">
        <div class="border-top">
            <div class="row">
             
                <div class="col-12 mt-5">
                  <h5>{{$menu->name}}  <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:16px" aria-hidden="true"></i></h5> 
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel">
                        <div class="swiper-container" style="padding-bottom: 15px">
                          
                            <div class="swiper-wrapper" >
                              @foreach ($menu->submenu as $sub)
                                <!-- Single Brand Logo Start -->
                                @foreach ($sub->posts as $post )
                                @if($post->status == 1)
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
                                @endif
                                <!-- Single Brand Logo End -->
                                @endforeach
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
@endforeach
<!-- motors End --> 