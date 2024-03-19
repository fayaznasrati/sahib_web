@extends('layouts/contentNavbarLayout')

@section('title', 'brand info')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
  Services Manager / </span> services</h4> @if (isset($food))
  {{$food->name}}
  @endif
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
                  Create New Food Menu
              </a>
              <a class="btn btn-success me-1 collapsed" data-bs-toggle="collapse" href="#collapseCreate"
                  role="button" aria-expanded="false" aria-controls="collapseCreate">
                 Create New Roome/Hall
              </a>
          </p>

          {{-- Create Food Menu --}}
          <div class="collapse {{ isset($food) ? 'show' : '' }}" id="collapseExample">
            <hr><center ><h3 style="color: green" >Create Food Menu</h3></center><hr> 
            @if (isset($food))
                <form action="{{ route('service-brand-update', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                @else
            <form action="{{ route('service-brand-food-menu-store') }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="service_brand_id" value="{{ $service->id }}">
            @csrf
            @endif

            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12">
                    <label for="name"><small>Name *:</small></label>
                    <input class="form-control" type="text" placeholder="Hall or Room Name" name="name"
                        value="{{ old('name', $food->name ?? '') }}">
                </div>
                <div class="col-md-12">
                    <label for="formFile" class="form-label">Cover 200px W/200px H</label>
                    <input class="form-control" type="file" id="formFile" name="cover">
                </div>
                <div class="col-md-12">
                    <label for="formFile" class="form-label">Upload Galllery Images 600px W/400px H</label>
                    <input class="form-control" type="file" id="formFile" name="images[]" multiple>
                </div>
                <div class="col-md-12">
                    <label for="name"><small>price:</small></label>
                    <input class="form-control" type="number" placeholder="100" name="price"
                        value="{{ old('price', $food->price ?? '') }}">
                </div>
              
                </div>
              </div>
              <div class="col-md-8">
                  <label for="name"><small>Description:</small></label>
                  <textarea class="form-control" type="text" placeholder="worite description of room or hall here..."
                      name="description">{{ old('description', $food->description ?? '') }}</textarea>
              </div>
              
            </div>
            <br>
            <center>
                <div class="col-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <button type="submit" id="submit" name="submit"
                        class="btn btn-dark btn-hover-primary rounded-0">{{ isset($food) ? 'Update' : 'Create' }}</button>
                </div>
            </center>

            </form>

            <br><br>
            @if (isset($food))
                <div class="row">
                  
                    <div class="col-md-4" >
                        @if ($serv->logo != null)
                            <label for="name"><small>Current Logo:</small></label>

                            <form action="/admin/service-brand-delete-logo/{{ $food->id }}" method="post">
                                <button class="btn text-danger">X</button>
                                @csrf
                                @method('delete')
                            </form>
                            <img src="../../service-brand/logo/{{ $food->logo }}" style="width: 100%">
                        @else
                            No Logo Yet
                        @endif
                    </div>
                    <div class="col-md-8" >
                        @if (count($food->brandGalleryImages) > 0)

                            <label for="name"><small>Current Gallery Banners:</small></label>
                            <div class="row">
                                @foreach ($food->brandGalleryImages as $img)
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

          {{-- Create Slider --}}
          <div class="collapse {{ isset($serv) ? 'show' : '' }}" id="collapseCreate">
            <hr><center ><h3 style="color: green" >Create Hote Rooms/Halls</h3></center><hr> 
              {{-- @if (isset($serv))
                  <form action="{{ route('service-brand-update', $serv->id) }}" method="POST" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                  @else
              <form action="{{ route('service-brand-store') }}" method="POST" enctype="multipart/form-data">
               @csrf
              @endif --}}

              <div class="row">
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12">
                      <label for="name"><small>Name *:</small></label>
                      <input class="form-control" type="text" placeholder="Hall or Room Name" name="name"
                          value="{{ old('name', $serv->name ?? '') }}">
                  </div>
                  <div class="col-md-12">
                      <label for="formFile" class="form-label">Cover 200px W/200px H</label>
                      <input class="form-control" type="file" id="formFile" name="cover">
                  </div>
                  <div class="col-md-12">
                      <label for="formFile" class="form-label">Upload Galllery Images 600px W/400px H</label>
                      <input class="form-control" type="file" id="formFile" name="images[]" multiple>
                  </div>
                  <div class="col-md-12">
                      <label for="name"><small>price:</small></label>
                      <input class="form-control" type="number" placeholder="100" name="price"
                          value="{{ old('price', $serv->price ?? '') }}">
                  </div>
                
                  </div>
                </div>
                <div class="col-md-8">
                    <label for="name"><small>Description:</small></label>
                    <textarea class="form-control" type="text" placeholder="worite description of room or hall here..."
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

    <div class="row">
        <!-- Bootstrap carousel -->
        <div class="col-md-4">
            <div class=" mb-3">
                <h5 class="my-4">Logo</h5>
                <img class="card-img-top" src="../../../service-brand/logo/{{ $service->logo }}" alt="Product"
                    style="max-height: 100%;">
            </div>
        </div>
        <div class="col-md-8">
            <h5 class="my-4">Banner Images</h5>
            @php $i = 0; @endphp
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExample" data-bs-slide-to="{{ $i }}" class="active"></li>
                    @if (count($service->brandGalleryImages) > 0)
                        @foreach ($service->brandGalleryImages as $img)
                            <li data-bs-target="#carouselExample" data-bs-slide-to="{{ ++$i }}"></li>
                        @endforeach
                    @endif
                </ol>
                <div class="carousel-inner">
                    @if (count($service->brandGalleryImages) > 0)
                        @php $i = 0 @endphp
                        @foreach ($service->brandGalleryImages as $img)
                            <div class="carousel-item @if ($i === 0) active @endif">
                                <img class="d-block w-100" src="../../service-brand/gallery/{{ $img->image }}"
                                    alt="{{ $i++ }}" />
                            </div>
                        @endforeach
                    @endif
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <!-- Bootstrap crossfade carousel -->
    </div>
    <hr>

    <div class="row">
        <div class="col-lg">
            <div class="card">
              <h5 class="card-header">{{ $service->brand_name }}</span> Information</h5>
                <div class="card-body">
                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">
                        <div class="row pt-0">
                            <div class="col-md-4">
                                <!-- Product Head Start -->
                                <div class="product-head mb-3">
                                    <b>Phone:</b> <a
                                        href="tel:{{ $service->phone_number }}">{{ $service->phone_number }}</a> <br>
                                    <b>WhatsApp:</b> <a
                                        href="https://wa.me/{{ $service->whatsapp_number }}">{{ $service->whatsapp_number }}</a><br>
                                    <b>Email:</b> <a href="mailto:{{ $service->email }}">{{ $service->email }}</a><br>
                                    <span><b>Status:</b><span
                                            class="badge bg-label-{{ $service->status == 1 ? 'success' : 'warning' }} me-1">{{ $service->status == 1 ? 'Active' : 'Deactive' }}</span></span>
                                    <br>
                                    <span><b>Poblished at:</b> {{ $service->updated_at }}</span><br>
                                </div>
                                <!-- SKU End -->
                            </div>
                            <div class="col-md-8">
                                <span><b>Short description:</b> <br>{!! $service->about !!}</span><br>
                                <hr>
                                <span><b>Full description:</b> <br> {!! $service->description !!}</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <br><hr>

         <!-- Striped Rows -->
    <div class="row">
      <div class="card">
          <h5 class="card-header">Food Menu List</h5>
          <div class="table-responsive text-nowrap">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>#No</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Cover</th>
                          <th>Banner Img</th>
                          <th>Poblished at</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

                  <tbody class="table-border-bottom-0">
                      @php $i = 1 @endphp
                      @foreach ($foodMenus as $foodMenu)
                          <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $foodMenu->name }}</td>
                              <td>{{ $foodMenu->price }}</td>
                              <td><img src="../../service-brand/food-menu-cover/{{ $foodMenu->cover }}" alt="post image"
                                      style="height: auto; width:40px"></td>
                              <td>
                                  <ul class="list-unstyled users-list mb-4 avatar-group d-flex align-items-center">
                                      @if (count($foodMenu->foodMenuImages) != null)
                                          @foreach ($foodMenu->foodMenuImages as $img)
                                              <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                  data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                  title="{{ $foodMenu->brand_name }}">
                                                  <img src="../../service-brand/food-menu-images/{{ $img->image }}"
                                                      alt="brand image" style="height: 40px; width:60px">
                                              </li>
                                          @endforeach
                                      @endif
                                  </ul>
                              </td>
                              <td>{{ $foodMenu->updated_at }}</td>
                              <td>
                                  <div class="form-check form-switch mb-2">
                                      <input data-bid="{{ $foodMenu->id }}"
                                          class="form-check-input admin_service_status_btn" type="checkbox"
                                          id="flexSwitchCheckChecked" {{ $foodMenu->status == 1 ? 'checked' : '' }}>
                                  </div>
                                  <input type="hidden" name="foodmenuid" value="{{ $foodMenu->id }}">
                              </td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                      <div class="dropdown-menu">
                                          <a class="dropdown-item"
                                              href="{{ route('service-brand-food-menu-edit', $foodMenu->id) }}"><i
                                                  class="bx bx-edit-alt me-1"></i> Edit</a>
                                          <a class="dropdown-item"
                                              href="{{ route('service-brand-food-menu-show', $foodMenu->id) }}"><i
                                                  class="bx bx-show-alt me-1"></i> View</a>
                                          <form id="delete-form"
                                              action="{{ route('service-brand-food-menu-delete', $foodMenu->id) }}"
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
          {{-- {{ $services->links() }} --}}
         
      </div>
    </div>
    <br>
    <hr>
        <!-- SKU Start -->
        <div class="col-md">
            <div class="card">
              <h5 class="card-header">Woner Details</h5>
                <div class="card-body">
                  
                    <div class="sku mb-3">
                        <span><b>Author Name:</b>{{ $service->user->name }}</span> <br>
                        <span><b>Mobile:</b> <a href="tel:{{ $service->user->mobile }}">{{ $service->user->mobile }}</a></span><br>
                        <span><b>WhatsApp:</b> <a href="https://wa.me/{{ $service->user->whatsapp }}">{{ $service->user->whatsapp }}</a></span><br>
                        <span><b>Email:</b> <a href="mailto:{{ $service->user->email }}">{{ $service->user->email }}</a></span><br>                        
                        <span><b>Address:</b> {{ $service->user->name }}</span><br>
                        <span><b>City:</b> {{ $service->user->afgCity }}</span><br>
                        {{-- <span><b>zip code:</b> {{$service->user->zip_code}}</span><br> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- SKU End -->

    </div>

@endsection
