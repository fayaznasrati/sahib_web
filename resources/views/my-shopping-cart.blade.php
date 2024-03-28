@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

@section('title', 'my-shopping-cart')




<br><br><br>
<div class="container">


    <div class="row">
        <div class="col-md-12">

          <div class="card mb-4">
            <h5 class="card-header">My Wishlist</h5> 
                @if (count($wishlists)>=1)
                @foreach ($wishlists as $wish)         
                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper pl-6">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="/show-single-post/{{$wish->user->name}}/{{$wish->posts->slug}}"><img src="../../cover/{{$wish->posts->cover}}" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                
                                <h3 class="title"><a href="/show-single-post/{{$wish->user->name}}/{{$wish->posts->slug}}">{{$wish->posts->name}}</a></h3>
                                <span class="price">
                                    <span id="regular-price"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$wish->posts->new_price}} </span>
                                <span class="old"><img src="{{asset('assets/images/logo/m-afg.png')}}" alt="Afg">{{$wish->posts->old_price}}</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a class="remove-from-wishlist" data-post-id="{{$wish->posts->id}}"><i class="fa fa-trash"></i></a>
                    <button class="remove-from-wishlist"><i class="fa fa-trash"></i></button>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                @endforeach
                @else
               <center> <b >No Thing On Wishlist Yet!</b></center>
               <br>
                @endif
</div>
</div>
</div>

@endsection