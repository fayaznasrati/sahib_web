       <!-- Single Product Start -->
       <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" >
        <div class="product-inner">
            <div class="thumb">
                {{-- <a href="{{ route('show-single-post', ['id' => $post->id]) }}" target="_blank" rel="Category Name">{{$post->name}}</a></li> --}}

                <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}"  class="image">
                    <img src="../cover/{{$post->cover}}" alt="Product" />
                </a>
                <div class="actions">
                    {{-- <form action="{{ route('wishlist.add', $post) }}" method="POST">
                        @csrf --}}
                    <a type="submit"  data-post-id="{{ $post->id }}" class="action wishlist add-to-wishlist"><i class="pe-7s-like"></i></a>
                        {{-- <input type="hidden" name="post_id" value="{{$post->id}}">
                        <button type="submit"><i class="pe-7s-like"></i></button>
                    </form> --}}
                </div>
            </div>
            <div class="content">
                <span id="price">
                     <img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">  {{$post->new_price}}
                </span>
                <h5 class="title"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" >{{$post->name}}</a></h5>
                <h4 class="sub-title"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" >{!! Str::limit($post->note, 30) !!}</a></h4>
            </div>
        </div>
    </div>
    <!-- Single Product End -->