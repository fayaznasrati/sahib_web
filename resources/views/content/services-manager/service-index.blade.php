@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">services Manager / </span> services

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
                        Filter services Brand
                    </a>
                    <a class="btn btn-success me-1 collapsed" data-bs-toggle="collapse" href="#collapseCreate"
                        role="button" aria-expanded="false" aria-controls="collapseCreate">
                        Create New services Brand
                    </a>

                </p>
                {{-- Filter Slider --}}
                {{-- <div class="collapse" id="collapseExample">
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
                </div> --}}


                {{-- Create Slider --}}
                <div class="collapse {{ isset($serv) ? 'show' : '' }}" id="collapseCreate">
                    @if (isset($serv))
                        <form action="{{ route('service-brand-update', $serv->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                        @else
                    <form action="{{ route('service-brand-store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    @endif

                    <div class="row">
                        <div class="col-md-4">
                            <label for="name"><small>Service Type *:</small></label>
                            <select class="form-control" name="service_id" id="">
                                @foreach ($services_name as $service)
                                    @if (isset($serv))
                                        <option {{ $service->id == $serv->service_id ? 'selected' : 'x' }}
                                            value={{ $service->id }}>{{ $service->service_name }}</option>
                                    @else
                                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Select woner:</small></label>
                            <select value="{{ old('user_id', $serv->user_id ?? '') }}" class="form-control" name="user_id"
                                id="">
                                @foreach ($users as $user)
                                    @if (isset($serv))
                                        <option {{ $user->id == $serv->user_id ? 'selected' : 'x' }}
                                            value={{ $user->id }}>{{ $user->name }}</option>
                                    @else
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Name *:</small></label>
                            <input class="form-control" type="text" placeholder="Air Pro PC" name="brand_name"
                                value="{{ old('brand_name', $serv->brand_name ?? '') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Logo 200px W/200px H</label>
                            <input class="form-control" type="file" id="formFile" name="logo">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Upload Galllery Images 600px W/400px H</label>
                            <input class="form-control" type="file" id="formFile" name="images[]" multiple>
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Address:</small></label>
                            <input class="form-control" type="text"
                                placeholder="H 15, Line B5, St Wazirakbar khan, Kabul, afg" name="address"
                                value="{{ old('address', $serv->address ?? '') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Phone Number:</small></label>
                            <input class="form-control" type="number" min="0" maxlength="13"
                                placeholder="+93 123456789" name="phone_number"
                                value="{{ old('phone_number', $serv->phone_number ?? '') }}"
                                oninput="javasecript: if(this.value.length> 13) this.value = this.value.slice(0,13);">
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Whatsapp Number:</small></label>
                            <input class="form-control" type="number" min="0" maxlength="13"
                                placeholder="+93 123456789" name="whatsapp_number" id="whatsapp_number"
                                value="{{ old('whatsapp_number', $serv->whatsapp_number ?? '') }}"
                                oninput="javascript: if (this.value.length > 13) this.value = this.value.slice(0, 13);">
                        </div>
                        <div class="col-md-4">
                            <label for="name"><small>Email:</small></label>
                            <input class="form-control" type="email" placeholder="example@emaple.com" name="email"
                                value="{{ old('email', $serv->email ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="name"><small>About:</small></label>
                            <textarea class="form-control" type="text" placeholder="worite about your brand here..." name="about"
                                > {{ old('about', $serv->about ?? '') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name"><small>Description:</small></label>
                            <textarea class="form-control" type="text" placeholder="worite description of your brand here..."
                                name="description">{{ old('description', $serv->description ?? '') }}</textarea>
                        </div>
                    </div>
                    <br>
                    <center>
                        <div class="col-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <button type="submit" id="submit" name="submit"
                                class="btn btn-dark btn-hover-primary rounded-0">{{ isset($serv) ? 'Update' : 'Create' }}</button>
                        </div>
                    </center>

                    </form>

                    <br><br>
                    @if (isset($serv))
                        <div class="row">
                           
                            <div class="col-md-4" >
                                @if ($serv->logo != null)
                                    <label for="name"><small>Current Logo:</small></label>

                                    <form action="/admin/service-brand-delete-logo/{{ $serv->id }}" method="post">
                                        <button class="btn text-danger">X</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <img src="../../service-brand/logo/{{ $serv->logo }}" style="width: 100%">
                                @else
                                    No Logo Yet
                                @endif
                            </div>
                            <div class="col-md-8" >
                                @if (count($serv->brandGalleryImages) > 0)

                                    <label for="name"><small>Current Gallery Banners:</small></label>
                                    <div class="row">
                                        @foreach ($serv->brandGalleryImages as $img)
                                            <div class="images-child col-md-4">
                                                <form action="/admin/service-brand-delete-image/{{ $img->id }}"
                                                    method="post">
                                                    <button class="btn text-danger">X</button>
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                <div class="col-md-4" style="width:100%">
                                                    <img src="../../service-brand/gallery/{{ $img->image }}"
                                                        style="width: 100%">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                   No Gallery Banners
                                @endif
                            </div>
                         

                        </div>

                    @endif
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Basic Bootstrap Table -->
    <!-- Striped Rows -->
    <div class="row">
        <div class="card">
            <h5 class="card-header">Services Brand List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#No</th>
                            <th>Made by</th>
                            <th>Logo</th>
                            <th>Banner Img</th>
                            <th>Name</th>
                            <th>Poblished at</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @php $i = 1 @endphp
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $service->user->name }}</strong>
                                </td>
                                <td><img src="../../service-brand/logo/{{ $service->logo }}" alt="post image"
                                        style="height: auto; width:40px"></td>
                                <td>
                                    <ul class="list-unstyled users-list mb-4 avatar-group d-flex align-items-center">
                                        @if (count($service->brandGalleryImages) != null)
                                            @foreach ($service->brandGalleryImages as $img)
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="{{ $service->brand_name }}">
                                                    <img src="../../service-brand/gallery/{{ $img->image }}"
                                                        alt="brand image" style="height: 40px; width:60px">
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </td>
                                <td>{{ $service->brand_name }}</td>

                                <td>{{ $service->updated_at }}</td>
                                <td>
                                    <div class="form-check form-switch mb-2">
                                        <input data-sbid="{{ $service->id }}"
                                            class="form-check-input admin_service_brand_status_btn" type="checkbox"
                                            id="flexSwitchCheckChecked" {{ $service->status == 1 ? 'checked' : '' }}>
                                    </div>
                                    <input type="hidden" name="serviceid" value="{{ $service->id }}">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('service-brand-edit', $service->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('service-brand-show', $service->id) }}"><i
                                                    class="bx bx-show-alt me-1"></i> View</a>
                                            <form id="delete-form"
                                                action="{{ route('service-brand-delete', $service->id) }}"
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
            {{ $services->links() }}
            <br>
        </div>
        <!-- Basic Bootstrap Table -->

        <!--/ Striped Rows -->

        {{-- <script>
            // Get reference to the form and the delete button
            const form = document.getElementById('deleteForm');
            const deleteButton = document.getElementById('deleteButton');

            // Add click event listener to the delete button
            deleteButton.addEventListener('click', function(event) {
                // Prevent the default form submission behavior
                event.preventDefault();
                // Submit the form
                form.submit();
            });
        </script> --}}
    @endsection
