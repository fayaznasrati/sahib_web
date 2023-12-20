@extends('layouts/contentNavbarLayout')

@section('title', $brand->name)

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
                href="/admin/users-manager">Users</a>/ <span class="active"
                style="color:brown">{{ $brand->name }}</span> Brand inforamtion </h4>
    </div>

            <div class="row">
            <div >
              <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">     {{$brand->name}} Basic Info</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" tabindex="-1">  {{$brand->name}} Gov Certificate</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false" tabindex="-1"> {{$brand->name}} Products</button>
                  </li>
                  <li class="nav-item mt-2" id="checkAndUpdate" > 
                   <b>Status:</b> <span class="badge bg-label-{{$brand->status == 1? 'success' : 'danger'}} me-1">{{$brand->status == 1? 'Active' : 'Not Active Yet'}}</span>
                    
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        
                                <tbody class="table-border-bottom-0">
                                <tr><th><strong>Brand_ID </strong></th><td>{{$brand->branduuid}}</td></tr>
                                <tr><th><strong>Gov_ID </strong></th><td>{{$brand->brand_certificate_no}}</td></tr>
                                <tr><th><strong>Name </strong></th><td>{{$brand->name}}</td></tr>
                                <tr><th><strong>Status </strong></th><td>
                                     <span class="form-check form-switch mb-2">
                                        <input data-bid="{{ $brand->id }}"
                                            class="form-check-input admin_brand_status_btn" type="checkbox"
                                            id="flexSwitchCheckChecked" {{ $brand->status == 1 ? 'checked' : '' }}>
                                    </span>
                                    <input type="hidden" name="brandid" value="{{ $brand->id }}">
                                    </td></tr>
                                <tr><th><strong>Owner </strong></th><td>{{$brand->user->name}}</td></tr>
                                <tr><th><strong>Mobile </strong></th><td>{{$brand->mobile}}</td></tr>
                                <tr><th><strong>WhatsApp </strong></th><td>{{$brand->whatsapp}}</td></tr>
                                <tr><th><strong>Email </strong></th><td>{{$brand->email}}</td></tr>
                                <tr><th><strong>Foundate at </strong></th><td>{{$brand->brand_found_date}}</td></tr>
                                <tr><th><strong>Address </strong></th><td><small>{{$brand->address}}</small></td></tr>
                                <tr><th><strong>City </strong></th><td>{{$brand->name}}</td></tr>
                                <tr><th><strong>Zip Code </strong></th><td>{{$brand->zip_code}}</td></tr>
                                <tr><th><strong>Join_Date </strong></th><td>{{$brand->created_at}}</td></tr>
                                <tr><th><strong>Logo </strong></th><td> <img style="max-height: 600px" class="fit-image" src="../../../../brand_logo/{{ $brand->brand_logo }}"
                                    alt="{{ $brand->name }}"></td></tr>

                                </tbody>
                  

                      </table>
                    </div>
                          </div>
                
                        <div class="col-md-6">
                            <div >
                                <h2 class="title">About {{$brand->name}}</h2>
                                <div class="card-body">
                                    {!!$brand->about!!}
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                    <h5 class="card-header">Brand Gov Certificate</h5>
                    <div class="row">
                        <img style="max-height: 600px" class="fit-image" src="../../../../brand_certificate_img/{{ $brand->brand_certificate_img }}"
                        alt="{{ $brand->name }}">
                    </div>
                  </div>
                  <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                    @if (count($posts) > 1)
                    <!-- brand product  Section Start -->
                    <!-- Striped Rows -->
                    <div >
                        <h5 class="card-header">{{$brand->name}} Products</h5>
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
                  </div>
                </div>
              </div>
            </div>
          

          </div>


@endsection
