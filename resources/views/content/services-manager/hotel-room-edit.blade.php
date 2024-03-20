@extends('layouts/contentNavbarLayout')

@section('title', 'brand info')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')


 {{-- Create Food Menu --}}
 <div class="collapse {{ isset($hotelRoom) ? 'show' : '' }}" id="collapseExample">
    <hr><center ><h3 style="color: green" >Update Food Menu</h3></center><hr> 
    @if (isset($hotelRoom))
        <form action="{{ route('service-brand-hotel-update', $hotelRoom->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        @else
    <form action="{{ route('service-brand-hotel-store') }}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="service_brand_id" value="{{ $service->id }}">
    @csrf
    @endif

    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
            <label for="name"><small>Name *:</small></label>
            <input class="form-control" type="text" placeholder="Hall or Room Name" name="name"
                value="{{ old('name', $hotelRoom->name ?? '') }}">
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
                value="{{ old('price', $hotelRoom->price ?? '') }}">
        </div>
      
        </div>
      </div>
      <div class="col-md-8">
          <label for="name"><small>Description:</small></label>
          <textarea class="form-control" type="text" placeholder="worite description of room or hall here..."
              name="description">{{ old('description', $hotelRoom->description ?? '') }}</textarea>
      </div>
      
    </div>
    <br>
    <center>
        <div class="col-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <button type="submit" id="submit" name="submit"
                class="btn btn-dark btn-hover-primary rounded-0">{{ isset($hotelRoom) ? 'Update' : 'Create' }}</button>
        </div>
    </center>

    </form>

    <br><br>
    @if (isset($hotelRoom))
        <div class="row">
          
            <div class="col-md-4" >
                @if ($hotelRoom->cover != null)
                    <label for="name"><small>Current Logo:</small></label>

                    <form action="/admin/service-brand-hotel-cover-delete/{{ $hotelRoom->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="../../service-brand/hotel-room-cover/{{ $hotelRoom->cover }}" style="width: 100%">
                @else
                    No Logo Yet
                @endif
            </div>
            <div class="col-md-8" >
                @if (count($hotelRoom->HotelRoomAndHallImages) > 0)

                    <label for="name"><small>Current Gallery Banners:</small></label>
                    <div class="row">
                        @foreach ($hotelRoom->HotelRoomAndHallImages as $img)
                            <div class="images-child col-md-4">
                                <form action="/admin/service-brand-hotel-image-delete/{{ $img->id }}"
                                    method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>
                                <div class="col-md-4" style="width:100%">
                                    <img src="../../service-brand/hotel-room-images/{{ $img->image }}"
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

    @endsection