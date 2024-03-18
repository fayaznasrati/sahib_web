
<div class="mobile-card-title-header">
  <a href="">Pupolar Products</a>
  <a href="" id="have-main-color">View All <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:15   px" aria-hidden="true"></i> </a>
</div>
   <div>

  <div class="banners-scrolling-wrapper">

    @foreach ($banners as $banner)
      
    <div class="banners_my_card"><a href="{{ $banner->url }}">
      <img src="../../../mobileCover/banner/{{ $banner->mobileCover }}" alt="{{ $banner->name }}">
      </a>            
    </div>

    @endforeach

  </div>
</div>
  </div>
</div>