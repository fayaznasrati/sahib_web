@extends('layouts.service-dashboard-app')
@section('service-dashboard-content')
    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
            <div class="row">
                <div class="section section-margin">
                    <div class="container">
                        <!-- Shop Section Start -->
                            @if (isset($product))
                            {{$product->name}}
                            @endif
                        <div class="card mb-4">
                            {{-- <div class="card-header"> <p>Manage Products </p></div> --}}

                            <div class="card-body">
                                <button class="btn btn-warning me-1 mb-2" id="hideAll">Close</button>
                                @if ($brand->service_id == 8 || $brand->service_id == 9)
                                <button class="btn btn-primary me-1 mb-2" id="createFood">Create new Food Menu</button>
                                @elseif($brand->service_id == 7 || $brand->service_id == 10)
                                <button class="btn btn-primary me-1 mb-2" id="createFood">Create new Food Menu</button>
                                <button class="btn btn-primary me-1 mb-2" id="createRoom">Create new Rooms/Halls</button>
                                @else
                                <button class="btn btn-primary me-1 mb-2" id="createRoom">Create Product</button>
                                @endif

                                <div class="createFoodMenu" style="display: none;">
                                    @if (isset($food))
                                    <form action="{{ route('service-brand-update', $food->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                    @else
                                        <form action="{{ route('service-brand-product-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="service_brand_id" value="{{ $brand->id }}">
                                            @csrf
                                    @endif
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name"><small>Name *:</small></label>
                                                        <input class="form-control" type="text" placeholder="Food Name"
                                                            name="name" value="{{ old('name', $food->name ?? '') }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="formFile" class="form-label">Cover 200px W/200px
                                                            H</label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="cover">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="formFile" class="form-label">Upload Galllery Images
                                                            600px W/400px H</label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="images[]" multiple>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="name"><small>price:</small></label>
                                                        <input class="form-control" type="number" placeholder="100"
                                                            name="price" value="{{ old('price', $food->price ?? '') }}">
                                                    </div>
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
                                </div>

                                <div class="createRoomOr" style="display: {{$show}};">
                                    @if (isset($product))
                                    
                                    <form action="{{ route('service-brand-product-update', $product->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                    @else
                                        <form action="{{ route('user-service-brand-product-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="service_brand_id" value="{{ $brand->id }}">
                                            @csrf
                                    @endif
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name"><small>Name *:</small></label>
                                                        <input class="form-control" type="text" placeholder="Name"
                                                            name="name" value="{{ old('name', $product->name ?? '') }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="formFile" class="form-label">Cover 200px W/200px
                                                            H</label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="cover">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="formFile" class="form-label">Upload Galllery Images
                                                            600px W/400px H</label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="images[]" multiple>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="name"><small>price:</small></label>
                                                        <input class="form-control" type="number" placeholder="100"
                                                            name="price" value="{{ old('price', $product->price ?? '') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label for="name"><small>Description:</small></label>
                                            <textarea class="form-control" type="text" placeholder="worite description of room or hall here..."
                                                name="description">{{ old('description', $product->description ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <center>
                                        <div class="col-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                            <button type="submit" id="submit" name="submit"
                                                class="btn btn-dark btn-hover-primary rounded-0">{{ isset($product) ? 'Update' : 'Create' }}</button>
                                        </div>
                                    </center>
                        
                                    </form>
                        
                                    <br><br>
                                </div>

                                
                                <hr>
                                <br>
                                
                                <br>
                               
                                  <!-- Products Tab Start -->
                                  @if (count($hotelRooms)>0)
                                  <div class="row mydata-contdainer">
                                    @foreach ($hotelRooms as $pro)
                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-6 ">
                                            <div class="card" style="margin-bottom:20px;"> 
                                                <img src="../../service-brand/hotel-room-cover/{{ $pro->cover }}" alt="{{$pro->cover}}" style="max-height: 100px;object-fit: cover;">
                                                <div class="container m-1" style="text-align: left;">
                                                    <a href="/service/brand-info/{{$pro->slug}}" style="font-size:11px;">
                                                        <label style="color:green;">{{ strlen($pro->name) > 20 ? substr($pro->name, 0, 20) . '...' : $pro->name }}</label>
                                                        {{$pro->price}}
                                                    </a>
                                                    <br>
                                                    <center>
                                                        <a href="{{ route('service-product-edit', $pro->id) }}" style="padding: 0 5px 0 5px; margin-left:5px">
                                                            <i class="pe-7s-pen" style="font-size: 20px; color:blue"></i>
                                                        </a>
                                                        <a target="_blank" href="/show-service-single-pro/room-hall/{{$brand->brand_name}}/{{$pro->slug}}" style="padding: 0 5px 0 5px; margin-left:5px">
                                                            <i class="pe-7s-look" style="font-size: 20px; color:green"></i>
                                                        </a>
                                                        <a href="#" onclick="document.getElementById('delete-form-{{ $pro->id }}').submit();">
                                                            <i class="pe-7s-trash" style="font-size: 20px; color:red; padding: 0 5px; margin-left: 5px;"></i>
                                                        </a>
                                                        <form id="delete-form-{{ $pro->id }}" action="{{ route('service-product-delete', $pro->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </center>
                                                </div> 
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                 @endif

                                 @if (count($foodMenus)>0)
                                 <div class="row mydata-contdainer">
    
                                    @foreach ($foodMenus as $pro)
    
                                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-6 ">
                                        <div class="card" style="margin-bottom:20px;"> 
                                        <img src="../../service-brand/hotel-room-cover/{{ $pro->cover }}" alt="{{$pro->cover}}" style="max-height: 100px;object-fit: cover;">
                                           <div class="container m-1" style="text-align: left;">
                                               
                                            <a href="/service/brand-info/{{$pro->slug}}" style="font-size:11px;">
                                                <label style="color:green;">{{ strlen($pro->name) > 20 ? substr($pro->name, 0, 20) . '...' : $pro->name }}</label>
                                            {{$pro->price}}</a>
                                            <br>
                                         <center>
                                            <a href="{{ route('service-product-edit', $pro->id) }}" style="padding: 0 5px 0 5px; margin-left:5px">
                                                <i class="pe-7s-pen" style="font-size: 20px; color:blue"></i>
                                              </a>
                                              <a href="{{ route('service-product-view', $pro->id) }}" style="padding: 0 5px 0 5px;; margin-left:5px">
                                                <i class="pe-7s-look" style="font-size: 20px; color:green"></i>
                                              </a>
                                              <a href="{{ route('service-product-delete', $pro->id) }}" style="padding: 0 5px 0 5px;; margin-left:5px">
                                                <i class="pe-7s-trash" style="font-size: 20px; color:red"></i>
                                              </a>
                                         </center>
                                              </div> 
                                           </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                        </div>
                        
                    </div>
                    @endsection
