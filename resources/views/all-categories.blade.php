@extends('layouts.app')

@section('title', 'index')
@section('content')
<br>
<div class="mobile-design">  
    @foreach ( $menus as $menu)
        <h6><center><b style="border-bottom:2px solid #a7194b; padding:5px">{{$menu->name}}</b></center></h6>
        <br>
        @foreach ($menu->submenu as $submenu)
        <a href="/show-all-subcategory-posts/{{$menu->name}}/{{$submenu->slug}}"  rel="Category Name">
            <div class="categories-card">
                <img src="../../../submenu-icon/{{$submenu->cover}}" alt="m{{$submenu->cover}}">
                <b id="have-main-color">{!! Str::limit($submenu->name, 15) !!}</b>
            </div>
        </a>
        @endforeach    
    @endforeach    
</div>

 <!--Accordion area-->
 <div class="accordion_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="accordionExample" class="accordion mb-n4">
                    {{-- <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header card_accor" id="headingOne">
                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mauris congue euismod purus at semper. Morbi et vulputate massa?<i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse accordion-collapse show border-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="mobile-design">  
                        @foreach ( $menus as $menu)
                            
                                <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-header card_accor" id="headingTwo">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#{{$menu->slug}}" aria-expanded="false" aria-controls="collapseTwo">
                                            {{$menu->name}}
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    @foreach ($menu->submenu as $submenu)
                                    <div id="{{$menu->slug}}" class="collapse accordion-collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <a href="/show-all-subcategory-posts/{{$menu->name}}/{{$submenu->slug}}"  rel="Category Name">
                                            <div class="categories-card">
                                                <img src="../../../submenu-icon/{{$submenu->cover}}" alt="m{{$submenu->cover}}">
                                                <b id="have-main-color">{!! Str::limit($submenu->name, 15) !!}</b>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach    
                        @endforeach   --}}

                    {{-- <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-header card_accor" id="headingThree">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Aenean elit orci, efficitur quis nisl at, accumsan?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse accordion-collapse border-0" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-header card_accor" id="headingfour">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Pellentesque habitant morbi tristique senectus et netus?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseFour" class="collapse accordion-collapse border-0" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-header card_accor" id="headingfive">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Nam pellentesque aliquam metus?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseFive" class="collapse accordion-collapse border-0" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header card_accor" id="headingsix">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Aenean elit orci, efficitur quis nisl at?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseSix" class="collapse accordion-collapse border-0" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header card_accor" id="headingseven">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Morbi gravida, nisi id fringilla ultricies, elit lorem?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseSeven" class="collapse accordion-collapse border-0" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="card_dipult accordion-item mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-header card_accor" id="headingeight">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Aenean elit orci, efficitur quis nisl at, accumsan?
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <div id="collapseEight" class="collapse accordion-collapse border-0" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--Accordion area end-->

@endsection
