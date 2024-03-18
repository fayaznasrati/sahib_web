@if (count($motors)>=1) 
<div class="mobile-card-title-header">
  <a href="">Pupolar Products</a>
  <a href="" id="have-main-color">View All <i class="fa fa-arrow-right myCatArrow"  id="arrow-right" style="font-size:15   px" aria-hidden="true"></i> </a>
</div>
<div>
    
    <div class="scrolling-wrapper">
        @foreach ($motors as $post ) 
      <div class="my_card"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
        <img src="../../cover/{{$post->cover}}" alt="{{$post->cover}}" class="my_card__image" alt="" />
        <div class="card__overlay_desc">
              <div class="pro_title">
                  <b >{{$post->name}}</b>
              </div>
            <b class="pro_price"><img style="height: 15px; width:15px" src="assets/images/logo/m-afg.png" alt="AFG" >{{$post->new_price}} </b> 
            <b class="old_pro_price"><img style="height: 15px; width:15px" src="assets/images/logo/m-afg.png" alt="AFG" >{{$post->new_price}} </b>
            <div class="pro_location"> 
              <b style="color: gray">New City asdf asdf asdfKabul afghanistan</b>
          </div>
          </div></a>            
        </div>
        @endforeach
    </div>
</div>
@endif
