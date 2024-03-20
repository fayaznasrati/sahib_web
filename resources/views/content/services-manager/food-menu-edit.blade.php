@extends('layouts/contentNavbarLayout')

@section('title', 'brand info')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')


 {{-- Create Food Menu --}}
 <div class="collapse {{ isset($food) ? 'show' : '' }}" id="collapseExample">
    <hr><center ><h3 style="color: green" >Update Food Menu</h3></center><hr> 
    @if (isset($food))
        <form action="{{ route('service-brand-food-menu-update', $food->id) }}" method="POST" enctype="multipart/form-data">
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
                @if ($food->cover != null)
                    <label for="name"><small>Current Logo:</small></label>

                    <form action="/admin/service-brand-food-menu-cover-delete/{{ $food->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="../../service-brand/food-menu-cover/{{ $food->cover }}" style="width: 100%">
                @else
                    No Logo Yet
                @endif
            </div>
            <div class="col-md-8" >
                @if (count($food->foodMenuImages) > 0)

                    <label for="name"><small>Current Gallery Banners:</small></label>
                    <div class="row">
                        @foreach ($food->foodMenuImages as $img)
                            <div class="images-child col-md-4">
                                <form action="/admin/service-brand-food-menu-image-delete/{{ $img->id }}"
                                    method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>
                                <div class="col-md-4" style="width:100%">
                                    <img src="../../service-brand/food-menu-images/{{ $img->image }}"
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