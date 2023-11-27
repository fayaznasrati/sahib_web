       <!-- Single Product Start -->
       <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" >
        <div class="product-inner">
            <div class="thumb">
                {{-- <a href="{{ route('show-single-post', ['id' => $post->id]) }}" target="_blank" rel="Category Name">{{$post->name}}</a></li> --}}

                <a href="{{ route('show-single-post', ['id' => $post->id]) }}"  class="image">
                    <img src="../cover/{{$post->cover}}" alt="Product" />
                </a>
                <div class="actions">
                    <a href="#" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                </div>
            </div>
            <div class="content">
                <span id="price">
                     <img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">  {{$post->new_price}}
                </span>
                <h5 class="title"><a href="{{ route('show-single-post', ['id' => $post->id]) }}" >{{$post->name}}</a></h5>
                <h4 class="sub-title"><a href="{{ route('show-single-post', ['id' => $post->id]) }}" >{!! Str::limit($post->description, 30) !!}</a></h4>
            </div>
        </div>
    </div>
    <!-- Single Product End -->