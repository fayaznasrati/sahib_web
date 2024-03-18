@extends('layouts/contentNavbarLayout')

@section('title', 'silder')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Banner Manager / </span> Banner List

    </h4>


    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif


    <div class="row">
        <div class="card mb-4">
            <div class="card-body">
                <p class="demo-inline-spacing">
                    <a class="btn btn-primary me-1 collapsed" data-bs-toggle="collapse" href="#collapseExample"
                        role="button" aria-expanded="false" aria-controls="collapseExample">
                        Filter Slider
                    </a>
                    <a class="btn btn-success me-1 collapsed" data-bs-toggle="collapse" href="#collapseCreate"
                        role="button" aria-expanded="false" aria-controls="collapseCreate">
                        Create New Slide
                    </a>

                </p>
                {{-- Filter Slider --}}
                <div class="collapse" id="collapseExample">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating">
                            <div class="row">

                                <div class="col-md-2  ">
                                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">De-active</option>
                                    </select>
                                </div>
                                <div class="col-md-2  ">
                                    <label for="exampleFormControlInput1" class="form-label">Slid ID</label>
                                    <input class="form-control" type="search" value="Search ..." id="html5-search-input">
                                </div>
                                <div class="col-md-2  ">
                                    <label for="html5-date-input" class="form-label">From</label>
                                    <input class="form-control" type="date" value="2022-06-18" id="html5-date-input">
                                </div>
                                <div class="col-md-2  ">
                                    <label for="html5-date-input" class="form-label">To</label>
                                    <input class="form-control" type="date" value="2023-07-18" id="html5-date-input">
                                </div>
                                <div class="col-md-2 mt-3 ">
                                    <div class="d-grid  mx-auto">
                                        <label for="html5-date-input" class="form-label"></label>
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-3 ">
                                    <div class="d-grid  mx-auto">
                                        <label for="html5-date-input" class="form-label"></label>
                                        <button type="reset" class="btn btn-warning">clear</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                {{-- Create Slider --}}
                <div class="collapse {{isset($ban)? 'show' : ''}}" id="collapseCreate" >
                  @if (isset($ban))
                  <form action="{{ route('banner.update',$ban->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    @else
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                  @endif

                        <div class="row">
                                  <div class="col-md-6">
                                    <label for="name"><small>ad banner Name *:</small></label>
                                    <input class="form-control" type="text" placeholder="Air Pro PC" name="name" value="{{ old('name', $ban->name ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="name"><small>ad banner Url *:</small></label>
                                    <input class="form-control" type="text" placeholder="https://sahib.af/xxx"
                                        name="url" value="{{ old('url', $ban->url ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="formFile" class="form-label">Choose Cover For Web 600px W/400px H</label>
                                    <input class="form-control" type="file" id="formFile" name="cover">
                                </div>
                                <div class="col-md-6">
                                    <label for="formFile" class="form-label">Choose Cover For Mobile 300px W/150px H</label>
                                    <input class="form-control" type="file" id="formFile" name="mobileCover">
                                </div>
                                
                               
                                    @if (isset($ban))
                                    @if ($ban->cover!= null)
                                        
                                    
                                    <div class="col-md-6">
                                        <label for="name"><small>Current Cover:</small></label>
                                        <img src="../../../cover/banner/{{ $ban->cover }}" alt="banner image"
                                        style="height: auto; width:auto">
                                      </div>
                                      
                                    @else
                                    <b>No Image</b>
                                    @endif
                                    @if ($ban->cover!= null)
                                        
                                    
                                    <div class="col-md-6">
                                        <label for="name"><small>Current Mobile Cover:</small></label>
                                        <img src="../../../mobileCover/banner/{{ $ban->mobileCover }}" alt="banner image"
                                        style="height: auto; width:auto">
                                      </div>
                                      
                                    @else
                                    <b>No Image</b>
                                    @endif
                                    @endif

                        </div>
                        <br>
                        <center>
                            <div class="col-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                <button type="submit" id="submit" name="submit"
                                    class="btn btn-dark btn-hover-primary rounded-0">{{isset($ban) ? "Update" :"Create" }}</button>
                            </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Basic Bootstrap Table -->

    <!-- Basic Bootstrap Table -->
    <!-- Striped Rows -->
    <div class="row">
        <div class="card">
            <h5 class="card-header">banner List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#No</th>
                            <th>banner ID</th>
                            <th>Made by</th>
                            <th>Cover</th>
                            <th>Mobile Cover</th>
                            <th>Name</th>
                            <th>Poblished at</th>
                            <th>Expires at</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $i = 1 @endphp
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $banner->banneruuid }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $banner->user->name }}</strong>
                                </td>
                                <td><img src="../../../cover/banner/{{ $banner->cover }}" alt="banner image"style="height: auto; width:40px"></td>
                                <td><img src="../../../mobileCover/banner/{{ $banner->mobileCover }}" alt="banner image"style="height: auto; width:40px"></td>
                                <td>{{ $banner->name }}</td>
                                <td>{{ $banner->updated_at }}</td>
                                <td>
                                    @if (\Carbon\Carbon::now() > \Carbon\Carbon::parse($banner->expired_at))
                                        <span style="color: red">Expired at
                                            {{ \Carbon\Carbon::parse($banner->expired_at)->format('Y-m-d') }}</span>
                                    @else
                                        Expires in
                                        {{ \Carbon\Carbon::parse($banner->expired_at)->diffInDays(\Carbon\Carbon::now()) }}
                                        days
                                    @endif
                                </td>
                                {{-- <td data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="in 30 days will be expired after date of its createtion">{{$banner->exprire_at == null ? "in 30 Days": $banner->exprire_at}}</td> --}}

                                <td>
                                    <div class="form-check form-switch mb-2">
                                        <input data-bid="{{ $banner->id }}"
                                            class="form-check-input admin_banner_status_btn" type="checkbox"
                                            id="flexSwitchCheckChecked" {{ $banner->status == 1 ? 'checked' : '' }}>
                                    </div>
                                    <input type="hidden" name="bannerid" value="{{ $banner->id }}">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('banner.edit', $banner->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('banner.show', $banner->id) }}"><i
                                                    class="bx bx-show-alt me-1"></i> View</a>
                                            <form id="delete-form" action="{{ route('banner.destroy', $banner->id) }}"
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

            </div>
            {{ $banners->links() }}
            <br>
        </div>
    <!--/ Striped Rows -->
    @endsection
