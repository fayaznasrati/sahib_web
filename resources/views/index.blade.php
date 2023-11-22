@extends("layouts.app")
@section("content")

<div class="section">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <center class="all-search-box">
                <input type="text" placeholder="search anything here..." class="input-with-icon">
                <button class="search-button">Search</button>
             </center>
           </div>
        </div><hr>
    </div>
</div>
<div class="section">
    <div class="container">
        <h4 id="popular-categories-title">Popular Categories</h4>
        <div class="row parent-popular-category">
            @foreach ($menus as $menu )
            <div class="col-md-3 popular-category">
                <ul><small class="categroy-name">
                       <img src="../../../menu-icon/{{$menu->icon}}" alt="menu icon" style="height: auto; width:20px">
                     </small>
                    <a href="{{$menu->url}}"> <b class="cat-title">{{$menu->name}}</b></a>
                     <div class="categroy-name-list">
                   @foreach ($menu->submenu as $submenu)
                    <li><a href="{{$submenu->url}}" target="_blank" rel="Category Name">{{$submenu->name}}</a></li>
                    @endforeach                    
                    <li><a href="{{$menu->url}}" target="_blank" rel="Category Name">See All
                    <i class="fa fa-arrow-right" id="arrow-right" aria-hidden="true"></i>
                    </a></li>
                    </div>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

 @include("layouts.inc.category-post") 
 @include("layouts.inc.special-products") 
 @include("layouts.inc.category-post") 
 @include("layouts.inc.companies-banner") 
 @include("layouts.inc.category-post")  
 @include("layouts.inc.fullwidth-banner")  
 @include("layouts.inc.category-post")  
 

@endsection