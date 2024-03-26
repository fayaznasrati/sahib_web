@extends('layouts.service-dashboard-app')
@section('service-dashboard-content')
    @error('delete_confirm')
        <div class="toast-body">
            {{ $message }}
        </div>
    @enderror
    <div class="container">
        <div class="row">
            @if (isset($brand))
            @else
                <div class="col-12" style="margin-top: 40px">
                    <form action="{{ route('create-service-brand') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Start Create Brand Profile --}}
                        <div class="card mb-4">
                            <div class="card-body">

                                <p class="demo-inline-spacing">
                                    <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Create your Brand profile
                                    </a>
                                </p>


                                <div class="collapse" id="collapseExample">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="name" class="form-label">Select Your Services</label>
                                            <select id="service_id" name="service_id" class="select2 form-select">
                                                @foreach ($services_name as $service)
                                                    <option value="{{ $service->id }}">{{ $service->service_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="name" class="form-label">Your Brand name</label>
                                            <input class="form-control" type="text" id="name" name="brand_name"
                                                placeholder="eg: Alikozai" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-muted mb-1">Logo JPG, GIF or PNG. Max size of 800K</label>
                                            <input type="file" id="upload" name="logo" class="form-control"
                                                accept="image/png, image/jpeg" />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-muted mb-1">Desktop Brand Slide Show 600px W/400px H</label>
                                            <input type="file" id="upload" type="file" name="images[]" multiple
                                                class="form-control" accept="image/png, image/jpeg" />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-muted mb-1">Mobile Brand Slide Show 600px W/400px H</label>
                                            <input type="file" id="upload" name="mobileImages[]" multiple
                                                class="form-control" accept="image/png, image/jpeg" />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label"> Brand Mobile No</label>
                                            <input class="form-control" type="text" id="name" name="phone_number"
                                                placeholder="eg: eg:+93 000 000 000" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label"> Brand WhatsApp No</label>
                                            <input class="form-control" type="text" id="name" name="whatsapp_number"
                                                placeholder="eg: +93 000 000 000" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label"> Brand E-mail Address</label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="eg: domain@gmail.com" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Brand Certificate No</label>
                                            <input class="form-control" type="text" id="name"
                                                name="brand_certificate_no" placeholder="eg: 20345" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-muted mb-1">Brand Certificate jpg/png 800K</label>
                                            <input type="file" id="upload" name="brand_certificate_img"
                                                class="form-control" accept="image/png, image/jpeg" />
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="text-muted mb-1">Brand Founding Date</label>
                                            <input class="form-control" type="text" id="brand_found_date"
                                                name="brand_found_date" placeholder="eg: 2002" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Select Your City</label>
                                            <select id="city_id" name="city_id" class="select2 form-select">
                                                @foreach ($afg_cities as $city)
                                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-8">
                                            <label for="name" class="form-label">Your Brand address</label>
                                            <input class="form-control" type="text" id="address" name="address"
                                                placeholder="eg: new city st-5..." autofocus />
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="name" class="form-label">Write More About Your Brand </label>
                                            <textarea class="form-control" type="text" id="about" name="about" autofocus>
                                </textarea>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="name" class="form-label"> Brand Privacey And Policy </label>
                                            <textarea class="form-control" type="text" id="brand_policy" name="brand_policy" autofocus>
                              </textarea>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="name" class="form-label"> Brand Full Description </label>
                                            <textarea class="form-control" type="text" id="description" name="description" autofocus>
                            </textarea>
                                        </div>

                                        <br>
                                        <center>
                                            <div class="col-12 aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="500">
                                                <button type="submit" id="submit" name="submit"
                                                    class="btn btn-dark btn-hover-primary rounded-0">Submit</button>
                                            </div>
                                        </center>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            @endif
        </div>
        {{-- ==========================End Create Brand Profile===================== --}}


        @if (isset($brand))
            <div class="card mb-4">

                <div class="row">
                    <div class="col-md-5 pt-3">
                        <h6 class="card-header">
                            <b>Brand Status: <span style="color: {{ $brand->status == 0 ? 'red' : 'lightgreen' }} ">{{ $brand->status == 0 ? 'No approved yet' : 'Aproved' }}</span> </b>
                        </h6>
                    </div>

                    <div class="col-md-7">
                        <div class="d-flex align-items-start align-items-sm-center mt-2 ">
                            @if ($brand->logo == null)
                                <img src="{{ asset('assets/img/avatars/no-user-img.png') }}" alt="user-avatar"
                                    class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                            @else
                                <img src="../../service-brand/logo/{{ $brand->logo }}" alt="post image"
                                    alt="user-avatar" class="d-block rounded"
                                    style="height:100px;width:250px; margin-right:10px" responsive id="uploadedAvatar" />
                            @endif

     <form action="/user/update-service-brand/{{ $brand->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3 ">
                                    <label for="zipCode" class="form-label">Upload Your Brand Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo"value="{{ old('logo', $brand->logo ?? '') }}" maxlength="6" />
                                </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                          <label for="name"><small>Service Type *:</small></label>
                          <select class="form-control" name="service_id" id="">
                              @foreach ($services_name as $service)
                                  @if (isset($brand))
                                      <option {{ $service->id == $brand->service_id ? 'selected' : 'x' }}
                                          value={{ $service->id }}>{{ $service->service_name }}</option>
                                  @else
                                      <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                  @endif
                              @endforeach
                          </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="name" class="form-label">Brand Name</label>
                            <input class="form-control" type="text" id="name" name="brand_name"
                                value="{{ old('brand_name', $brand->brand_name ?? '') }}" autofocus />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email"
                                value="{{ old('email', $brand->email ?? '') }}" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="whatsapp_number">WhatsApp Number</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">AFG (+93)</span>
                                <input type="text" id="phoneNumber" name="whatsapp_number" class="form-control"
                                    value="{{ old('whatsapp_number', $brand->whatsapp_number ?? '') }}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">AFG (+93)</span>
                                <input type="text" id="phone_number" name="phone_number" class="form-control"
                                    value="{{ old('phone_number', $brand->phone_number ?? '') }}" placeholder="{{ $user->phone_number }}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-4">
                          <label for="city" class="form-label">City</label>
                          <select id="city" name="city" class="select2 form-select">
                              <option>Select City</option>
                              @foreach ($afg_cities as $city)
                                  @if (isset($brand))
                                      <option {{ $city->name == $brand->city ? 'selected' : 'x' }}
                                          value={{ $city->name }}>{{ $city->name }}</option>
                                  @else
                                      <option value="{{ $city->name }}">{{ $city->name }}</option>
                                  @endif
                              @endforeach

                          </select>
                        </div>
                        <div class="mb-3 col-md-8">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address', $brand->address ?? '') }}" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="brand_certificate_no" class="form-label">Brand Certificate No</label>
                            <input type="text" class="form-control" id="brand_certificate_no"
                                name="brand_certificate_no"value="{{ old('brand_certificate_no', $brand->brand_certificate_no ?? '') }}" maxlength="6" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="brand_certificate_img" class="form-label">Update Brand Certificate</label>
                            <input type="file" class="form-control" id="brand_certificate_img"
                                name="brand_certificate_img"value="{{ old('brand_certificate_img', $brand->brand_certificate_img ?? '') }}" maxlength="6" />
                        </div>
                      
                        <div class="col-md-4">
                          <label for="zipCode" class="form-label">Update Mobile Banner</label>
                          <input class="form-control" type="file" id="formFile" name="mobileImages[]" multiple>
                        </div>
                        <div class="col-md-4">
                          <label for="zipCode" class="form-label">Update Desktop Banner</label>
                          <input class="form-control" type="file" id="formFile" name="images[]" multiple> <br>
                        </div>
                        <div class="mb-3 col-md-12">
                          <label for="name" class="form-label">Your Brand description </label>
                          <textarea class="form-control" type="text" id="description" name="description" autofocus>
                          {{ old('description', $brand->description ?? '') }}</textarea>
                      </div>
                      <div class="mb-3 col-md-12">
                          <label for="name" class="form-label">Your Brand about </label>
                          <textarea class="form-control" type="text" id="about" name="about" autofocus>
                            {{ old('about', $brand->about ?? '') }} </textarea>
                      </div>
                      <div class="mb-3 col-md-12">
                          <label for="name" class="form-label">Your Brand Privacey And Policy </label>
                          <textarea class="form-control" type="text" id="brand_policy" name="brand_policy" autofocus>
                            {{ old('brand_policy', $brand->brand_policy ?? '') }}</textarea>
                      </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                          <br><br>
                      </div>
                  </form>

                  <hr>
                      <div class="mb-3 col-md-12 mt-5">
                          <label for="zipCode" class="form-label">Brand Certificate</label>
                          @if ($brand->brand_certificate_img == null)
                              <img src="{{ asset('assets/img/avatars/no-user-img.png') }}" alt="user-avatar"
                                  class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                          @else
                              <img src="../../../service-brand/brand_certificate_img//{{ $brand->brand_certificate_img }}"
                                  alt="user-avatar" class="d-block rounded" style="height: 600px; width:100%" />
                          @endif
                      </div>
                      <hr>
                      <div class="col-md-12">
                              @if (count($brand->brandGalleryImages) > 0)
                                  <label for="name"><small>Current desktop Banners:</small></label> <br>
                                  <div class="row">
                                      @foreach ($brand->brandGalleryImages as $img)
                                          <div class="images-child col-md-4">
                                              <form action="/user/user-service-brand-delete-image/{{ $img->id }}"
                                                  method="post">
                                                  <button class="btn text-danger">X</button>
                                                  @csrf
                                                  @method('delete')
                                              </form>
                                              <div class="col-md-4" style="width:100%">
                                                  <img
                                                      src="../../service-brand/gallery/{{ $img->image }}"style="width: 80%">
                                              </div>
                                          </div>
                                      @endforeach
                                  </div>
                              @else
                                  No Desktop Banners
                              @endif
                          </div>
                      <hr>
                      <div class="col-md-12">
                        @if (count($brand->mobileBrandGalleryImages) > 0)
                            <label for="name"><small>Current mobile Banners:</small></label>
                            <div class="row">
                                @foreach ($brand->mobileBrandGalleryImages as $img)
                                    <div class="images-child col-md-4">
                                        <form action="/user/user-service-brand-delete-mobile-image/{{ $img->id }}"
                                            method="post">
                                            <button class="btn text-danger">X</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <div class="col-md-4" style="width:100%">
                                            <img
                                                src="../../service-brand/mobile-gallery/{{ $img->image }}"style="width: 80%">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            No mobile Banners
                        @endif
                      </div>
                     
                    </div>
                  </div>

                </div>
            </div>
        @endif

    </div>
@endsection
