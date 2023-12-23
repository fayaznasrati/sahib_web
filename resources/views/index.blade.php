@extends('layouts.app')

@section('title', 'index')
@section('content')
    @include('layouts.inc.hero-slider')


    {{-- ==========categories shown only in mobile============ --}}
    <div class="section onlyOnMobileShow">
        <div class="container">
            <h4 id="popular-categories-title">Popular Categories</h4>
            <div class="row parent-popular-category">
                @foreach ($mobileMenus as $menu)
                    <div class="col-md-3 popular-category">
                        <ul><small class="categroy-name">
                                <img src="../../../menu-icon/{{ $menu->icon }}" alt="menu icon"
                                    style="height: auto; width:20px">
                            </small>
                            <a href="{{ $menu->url }}"> <b class="cat-title">{{ $menu->name }}</b></a>
                            <div class="categroy-name-list">
                                @foreach ($menu->submenu as $submenu)
                                    <li>
                                        <a href="/show-all-subcategory-posts/{{ $menu->name }}/{{ $submenu->slug }}"
                                            rel="Category Name">{{ $submenu->name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="{{ $menu->url }}" rel="Category Name">See All
                                        <i class="fa fa-arrow-right" id="arrow-right" aria-hidden="true"></i>
                                    </a></li>
                            </div>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <!-- products start -->
    {{-- @include('layouts.inc.products') --}}
    @include('layouts.inc.products2')
    <!-- products End -->



    @include('layouts.inc.category-post')

    @include('layouts.inc.special-products')
    @include('layouts.inc.category-post')
    @include('layouts.inc.companies-banner')
    @include('layouts.inc.category-post')
    @include('layouts.inc.fullwidth-banner')
    @include('layouts.inc.category-post')


@endsection
