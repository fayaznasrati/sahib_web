@extends("layouts.app")
@section('title', 'Brand-info')
@section("content")
    <!-- Breadcrumb Section Start -->
    <div class="section" >

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light" >
            <div class="container-fluid">
                <div class="breadcrumb-content text-center" >
                    <h1 class="title">The Seller Brand Information</h1>
                    <ul>
                        <li>
                            <a href="/">Home </a>
                        </li>
                        <li>Company</li>
                        <li>Information</li>
                        <li class="active" style="color:brown">{{$brand->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
    </div>
       <!-- About Section Start -->
       <div class="section section-margin overflow-hidden">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-7 col-lg-7 align-self-center mb-6" data-aos="fade-right" data-aos-delay="600">
                    <div class="about_content">
                        <h2 class="title">About {{$brand->name}}</h2>
                        {{-- <h3 class="sub-title"></h3> --}}
                        <div>{!! $brand->about!!}</div>
                     </div>
                </div>
                <div class="col-md-5 col-lg-5 mb-6" data-aos="fade-left" data-aos-delay="600">
                    <div class="about_thumb">
                        <img class="fit-image" src="../../brand_logo/{{$brand->brand_logo}}" alt="{{$brand->name}}">
                    </div>
                </div>
            </div>
        </div>
       </div>


       @php
       $posts = App\Models\Posts::where('user_id', $brand->user_id)->get()
      @endphp

      @if (count($posts)>1)
        <!-- brand product  Section Start -->
        <div class="section section-margin">
                <div class="container">

                    <div class="row mb-n8">
                        <div class="col-12 col-lg-12 mb-10">
                            <!-- Section Title Start -->
                            <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="title pb-3">More Products Of<a href="/seller/comapany-info/{{$brand->slug}}" style="color: brown"> {{$brand->name}}</a></h2>
                                <span></span>
                                <div class="title-border-bottom"></div>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    

                    @foreach ($posts as $post)
                        
                        <div class="col-md-3 col-lg-3 mb-8" data-aos="fade-up" data-aos-delay="200">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">
                                        <img src="../../cover/{{$post->cover}}" alt="{{$post->name}}-img" style="max-height: 180px">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">{{$brand->name}}</a></span>
                                        <span>{{ \Carbon\Carbon::parse($post->updated_at)->format('d F Y') }}</span>
                                    </div>
                                    <h3 class="title"><a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}">{{Str::limit($post->name,20)}}</a></h3>
                                    <p>{!! $post->note!!}</p>
                                    <a href="/show-single-post/{{$post->subMenu->name}}/{{$post->slug}}" class="link">Read More</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>

                    @endforeach



                    </div>

                    {{-- <div class="row mb-2 mb-lg-0">

                        <!-- Pagination Start -->
                        <div class="col" data-aos="fade-up" data-aos-delay="300">
                            <nav class="mt-8 pt-8 border-top d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination End -->

                    </div> --}}

                </div>
        </div>
        <!-- brand product Section End -->
      @endif
  <!-- Contact Us Section Start -->
  <div class="section section-margin">
    <div class="container">
        <div class="row mb-n10">
            <div class="col-12 col-lg-12 mb-10">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Brand Contact Info</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->
                <!-- Contact Information Wrapper Start -->
                <div class="row contact-info-wrapper mb-n6">

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="300">

                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Postal Address</h4>
                            <p class="desc-content">{{$brand->address}}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">

                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Contact Us Anytime</h4>
                            <p class="desc-content">Mobile: {{$brand->mobile}}<br>
                                                    Whatsapp: {{$brand->whatsapp}}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="500">

                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Support Overall</h4>
                            <p class="desc-content">
                                <a href="mailto:{{$brand->email}}">{{$brand->email}}</a>
                                {{-- <a href="#">Support24/7@example.com</a> <br><a href="#">info@example.com</a> --}}
                             </p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                </div>
                <!-- Contact Information Wrapper End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact us Section End -->

  <!-- Contact Us Section Start -->
  <div class="section section-margin">
    <div class="container">
        <div class="row mb-n10">
            <div class="col-12 col-lg-12 mb-10">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Brand Policies</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->
                <!-- Contact Information Wrapper Start -->
                <div class="row contact-info-wrapper mb-n6">

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="300">

                        {{-- <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <!-- Single Contact Icon End --> --}}

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Brand Policy</h4>
                            <p class="desc-content">{!!$brand->brand_policy!!}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">

                        {{-- <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <!-- Single Contact Icon End --> --}}

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title"> Security Policy</h4>
                            <p class="desc-content">Mobile: {!!$brand->security_policy!!}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="500">

                        {{-- <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <!-- Single Contact Icon End --> --}}

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Delaivary Policy</h4>
                            <p class="desc-content">Mobile: {!!$brand->delivery_policy!!}</p>

                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                     <!-- Single Contact Information Start -->
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="600">

                        {{-- <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <!-- Single Contact Icon End --> --}}

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Return Policy</h4>
                            <p class="desc-content"> {!!$brand->return_policy!!}</p>

                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                </div>
                <!-- Contact Information Wrapper End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact us Section End -->

    <!-- About Section End -->

  
   
    <!-- Single Product Section End -->
    @include("layouts.inc.bottom-user-contact")
    <!-- Ajax script -->

@endsection

