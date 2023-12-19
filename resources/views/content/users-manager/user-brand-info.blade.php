@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->
@php
$posts = App\Models\Posts::where('user_id', $brand->user_id)->paginate(10);
@endphp

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Management /</span><a
                href="/admin/users-manager">Users</a>/ User Details/ <span class="active"
                style="color:brown">{{ $brand->name }}</span>Brand inforamtion </h4>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="section section-margin overflow-hidden">
                    <div class="container">
                        <div class="row mb-n6">
                            <div class="col-md-7 col-lg-7 align-self-center mb-6" data-aos="fade-right"
                                data-aos-delay="600">
                                <div class="about_content">
                                    <h2 class="title">About {{ $brand->name }} <br>
                                    Status :  {{ $brand->status ==0? "in active": 'Active' }} </h2>
                                    {{-- <h3 class="sub-title"></h3> --}}
                                    <div>{!! $brand->about !!}</div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 mb-6" data-aos="fade-left" data-aos-delay="600">
                                <div class="about_thumb">
                                    <img class="fit-image" src="../../../../brand_logo/{{ $brand->brand_logo }}"
                                        alt="{{ $brand->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="card">
            <h5 class="card-header"><span class="active"
                style="color:brown">{{ $brand->name }}</span> Products List</h5>
            <div class="card-body">
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
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up"
                                data-aos-delay="300">

                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <!-- Single Contact Icon End -->

                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Postal Address</h4>
                                    <p class="desc-content">{{ $brand->address }}</p>
                                </div>
                                <!-- Single Contact Title Content End -->

                            </div>
                            <!-- Single Contact Information End -->

                            <!-- Single Contact Information Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up"
                                data-aos-delay="400">

                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <!-- Single Contact Icon End -->

                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Contact Us Anytime</h4>
                                    <p class="desc-content">Mobile: {{ $brand->mobile }}<br>
                                        Whatsapp: {{ $brand->whatsapp }}</p>
                                </div>
                                <!-- Single Contact Title Content End -->

                            </div>

                            <!-- Single Contact Information End -->

                            <!-- Single Contact Information Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up"
                                data-aos-delay="500">

                                <!-- Single Contact Icon Start -->
                                <div class="single-contact-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <!-- Single Contact Icon End -->

                                <!-- Single Contact Title Content Start -->
                                <div class="single-contact-title-content">
                                    <h4 class="title">Support Overall</h4>
                                    <p class="desc-content">
                                        <a href="mailto:{{ $brand->email }}">{{ $brand->email }}</a>
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
    </div>
    <!-- Contact us Section End -->
    <br>

    @if (count($posts) > 1)
        <!-- brand product  Section Start -->
        <!-- Striped Rows -->
        <div class="card">
            <h5 class="card-header">Posts List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#No</th>
                            <th>Post ID</th>
                            <th>Cover</th>
                            <th>Images</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Poblished at</th>
                            <th>Expires In</th>
                            <th>Colors</th>
                            {{-- <th>Description</th> --}}
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $i = 1 @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $post->puuid }}</td>
                                <td><img src="../../../cover/{{ $post->cover }}" alt="post image"
                                        style="height: auto; width:40px"></td>
                                <td>
                                    <ul class="list-unstyled users-list mb-4 avatar-group d-flex align-items-center">
                                        @if (count($post->images) > 0)
                                            @foreach ($post->images as $img)
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="{{ $post->name }}">
                                                    <img src="/images/{{ $img->image }}" alt="post image"
                                                        style="height: 40px; width:60px">
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $post->menu->name }}</strong>
                                </td>
                                <td>{{ $post->subMenu->name }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->new_price }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    @if (\Carbon\Carbon::now() >= \Carbon\Carbon::parse($post->expired_at))
                                        <span style="color: red">Expired at
                                            {{ \Carbon\Carbon::parse($post->expired_at)->format('Y-m-d') }}</span>
                                    @else
                                        Expires in
                                        {{ \Carbon\Carbon::parse($post->expired_at)->diffInDays(\Carbon\Carbon::now()) }}
                                        days
                                    @endif

                                </td>
                                {{-- <td data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="in 30 days will be expired after date of its createtion">{{$post->exprire_at == null ?  \Carbon\Carbon::parse($post->expired_at)->diffInDays(\Carbon\Carbon::now()) : $post->exprire_at}}</td> --}}
                                <td>
                                    @php $colors = json_decode($post->colors) @endphp
                                    <table>
                                        <tr>
                                            @if ($colors != null)
                                                @foreach ($colors as $key)
                                                    <td>
                                                        <div
                                                            style="background-color:{{ $key }}; border: 4px solid {{ $key }};">
                                                        </div>
                                                    </td>
                                                    {{-- <td>{{$key}}</td> --}}
                                                @endforeach
                                            @else
                                                <td>No Colors</td>
                                            @endif
                                        </tr>
                                        </ul>
                                    </table>
                                    {{-- <td> <small> {!! Str::limit($post->description,20)!!} </small> </td> --}}
                                <td>
                                    <div class="form-check form-switch mb-2">
                                        <input data-pid="{{ $post->id }}"
                                            class="form-check-input admin_post_status_btn" type="checkbox"
                                            id="flexSwitchCheckChecked" {{ $post->status == 1 ? 'checked' : '' }}>
                                    </div>
                                    <input type="hidden" name="postid" value="{{ $post->id }}">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin-post-edit', $post->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('admin-post-show', $post->id) }}"><i
                                                    class="bx bx-show-alt me-1"></i> View</a>
                                            <form id="delete-form" action="{{ route('admin-post-delete', $post->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit"><i
                                                        class="bx bx-trash me-1"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $posts->links() }} <!-- Display pagination links -->
                <br>
            </div>

            <br>
        </div>

        <!--/ Striped Rows -->
        <!-- brand product Section End -->
    @endif

    <br>


    <!-- About Section End -->



@endsection
