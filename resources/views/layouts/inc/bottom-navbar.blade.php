  <nav class="navbar-bottom">
      <ul class="navbar-nav-bottom">
          <li class="nav-item-bottom">
              <a href="/">
                  <img style="margin-left: 5px" src="{{ asset('assets/images/icons/nav-home-icon-white.png') }}" alt="home">
                  <small>home</small>
              </a>
          </li>
          {{-- <li class="nav-item-bottom">
              <a href="/short">
                  <img style="margin-left: 5px" src="{{ asset('assets/images/icons/play-button.png') }}" alt="Cats">
                  <small>short</small>
              </a>
          </li> --}}
             
          <li class="nav-item-bottom">
            <a href="/all-categories">
                <img src="{{ asset('assets/images/icons/nav-category-icon-white.png') }}" alt="Cats">
                <small>Cats</small>
            </a>
        </li> 
          <li class="nav-item-bottom">

            <a @guest
               href="/register/seller" 
               @else
               @if (Auth::check() && Auth::user()->role === '1') 
               href="/admin/admin-post-create"  
               @else
               href="/user/seller/create/brand/products"
               @endif 
              @endguest>
                  <img src="{{ asset('assets/images/icons/nav-square-plus-white.png') }}" alt="add"><small>add</small>
            </a>
          </li>
    
        <li class="nav-item-bottom">
            <a href="/index">
                <img src="{{ asset('assets/images/icons/nav-heart-icon-white.png') }}" alt="liks">
                <small>likes</small>
            </a>
        </li>
          <li class="nav-item-bottom">
              <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                <img style="margin-left: 7px"  src="{{ asset('assets/images/icons/nav-hamburger-icon-white.png') }}" alt="Cat">
                <small>menu</small>
            </a>
          </li>


      </ul>
  </nav
