<swiper-container class="mySwiper mobile-design" direction="vertical" pagination="true" pagination-clickable="true" autoplay="true" :delay="5000">
    @foreach ($slider as $slid)
        <img class="swiper-slide" src="../../../mobileCover/slider/{{ $slid->mobileCover }}" alt="{{ $slid->name }}">
    @endforeach
</swiper-container>



{{-- @include('layouts.inc.mobile.categories') --}}
@include('layouts.inc.mobile.brands')

@include('layouts.inc.mobile.banner')







 
