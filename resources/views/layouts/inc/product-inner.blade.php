
    

    <div class="col-md-4 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <!-- Single Blog Start -->
        <div class="blog-single-post-wrapper">
            <div class="blog-thumb">
                <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}"  class="blog-overlay" >
                    <img src="../../../cover/{{$post->cover}}" alt="Product" style="max-height: 180px" />
                </a>
                <a type="submit"  data-post-id="{{ $post->id }}" class="action wishlist add-to-wishlist"><i class="pe-7s-like"></i></a>
            </div>
            @php
            $user = App\Models\User::where('id',$post->user_id)->latest()->first();
            $sellerb = App\Models\SellerBrand::where('user_id', $user->id)->latest()->first()
           @endphp

            <div class="blog-content">
                <div class="post-meta">
                    @if ($sellerb != null)
                    <span>By : <a href="/seller/comapany-info/{{$sellerb->slug}}" style="color: maroon"> {{$sellerb->name}}</a></span>
                    @endif
                    <span id="price">
                        <img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg" style="height: 20px">{{$post->new_price}}
                   </span>
                </div>
                <h3 class="title"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" >{{$post->name}}</a></h3>
                <p>{!! Str::limit($post->note, 30) !!}</p>
            </div>
        </div>
        <!-- Single Blog End -->
    </div>