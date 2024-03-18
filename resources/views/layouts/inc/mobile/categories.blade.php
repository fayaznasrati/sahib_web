{{-- <div class="row">     --}}
  <div class="categories-scrolling-wrapper">
    @foreach ($menus as $menu )
    <div class="categories_my_card">
      <a href="/show-all-category-posts/{{$menu->name}}/{{$menu->slug}}">
      <img src="../../../menu-icon/{{$menu->icon}}" alt="Cat">
      </a>            
    </div>
    @endforeach

    {{-- <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-bike.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-furniture-2.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-electronic.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-furniture.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-home.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-kichen.png')}}" alt="Cat">
      </a>            
    </div>
    <div class="categories_my_card"><a href="/show-single-post/">
      <img src="{{asset('assets/images/icons/cat-tv.png')}}" alt="Cat">
      </a>            
    </div> --}}

  </div>
{{-- </div> --}}