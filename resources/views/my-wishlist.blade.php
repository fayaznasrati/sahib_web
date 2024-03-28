@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")

@section('title', 'my-wishlist')
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


    <!-- Breadcrumb Section Start -->

    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    {{-- <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="wishlist-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-stock">Stock Status</th>
                                    <th class="pro-cart">Add to Cart</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/products/small-product/1.jpg" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Brother Hoddies in Grey <br> s / green</a></td>
                                    <td class="pro-price"><span>$95.00</span></td>
                                    <td class="pro-stock"><span>In Stock</span></td>
                                    <td class="pro-cart"><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="pe-7s-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/products/small-product/2.jpg" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Basic Jogging Shorts <br> Blue</a></td>
                                    <td class="pro-price"><span>$75.00</span></td>
                                    <td class="pro-stock"><span>In Stock</span></td>
                                    <td class="pro-cart"><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="pe-7s-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/products/small-product/10.jpg" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Lust For Life <br> Bulk/S</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-stock"><span>In Stock</span></td>
                                    <td class="pro-cart"><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="pe-7s-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/images/products/small-product/4.jpg" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Simple Woven Fabrics</a></td>
                                    <td class="pro-price"><span>$30.00</span></td>
                                    <td class="pro-stock"><span>In Stock</span></td>
                                    <td class="pro-cart"><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="pe-7s-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    <!-- Wishlist Section End -->


    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendors JS -->





@endsection