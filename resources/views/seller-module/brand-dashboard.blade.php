@extends('layouts.seller-dashboard-app')
@section('seller-dashboard-content')
    @error('delete_confirm')
        <div class="toast-body">
            {{ $message }}
        </div>
    @enderror
    <div class="container">
        <div class="row">
          <form action="{{ route('create-brand') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              {{-- Start Create Brand Profile --}}
                <div class="card mb-4">
                    <div class="card-body">
                      @if (isset($brand) )
                        @else
                        <p class="demo-inline-spacing">
                          <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button"
                              aria-expanded="false" aria-controls="collapseExample">
                              Create your Brand profile
                          </a>
                      </p>
                      @endif
                       
                        <div class="collapse" id="collapseExample">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand or Company name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="eg: Alikozai" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="text-muted mb-1">Logo Image JPG, GIF or PNG. Max size of 800K</label>
                                    <input type="file" id="upload" name="brand_logo"
                                    class="account-file-input"  accept="image/png, image/jpeg" />
                                    {{-- <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 " tabindex="0">
                                            <span class="d-none d-sm-block">Upload Your Brand Logo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="brand_logo"
                                                class="account-file-input" hidden accept="image/png, image/jpeg" />
                                        </label>
                                    </div> --}}
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand or Company Gov Certificate
                                        No</label>
                                    <input class="form-control" type="text" id="name" name="brand_certificate_no"
                                        placeholder="eg: 20345" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="text-muted mb-1">Brand Gov Certificate JPG, GIF or PNG. Max size of 800K</label>
                                    <input type="file" id="upload" name="brand_certificate_img"
                                                class="account-file-input"   accept="image/png, image/jpeg" />
                                    {{-- <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 " tabindex="0">
                                            <span class="d-none d-sm-block">Upload Your Brand Gov Certificate Image</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="brand_certificate_img"
                                                class="account-file-input" hidden  accept="image/png, image/jpeg" />
                                        </label>
                                    </div> --}}
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand Mobile No</label>
                                    <input class="form-control" type="text" id="name" name="mobile"
                                        placeholder="eg: eg:+93 000 000 000" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand WhatsApp No</label>
                                    <input class="form-control" type="text" id="name" name="whatsapp"
                                        placeholder="eg: +93 000 000 000" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand E-mail Address</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        placeholder="eg: domain@gmail.com" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand address</label>
                                    <input class="form-control" type="text" id="address" name="address"
                                        placeholder="eg: new city st-5..." autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Your Brand foundation Date</label>
                                    <input class="form-control" type="text" id="brand_found_date" name="brand_found_date"
                                        placeholder="eg: 2002" autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="name" class="form-label">zip Code </label>
                                    <input class="form-control" type="text" id="zip_code" name="zip_code"
                                        placeholder="eg: new city st-5..." autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="name" class="form-label">Select Your City</label>
                                    <select id="city_id" name="city_id" class="select2 form-select">
                                        @foreach ($afg_cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12 offset-md-2">
                                  <label for="name" class="form-label">Your Brand Privacey And Policy </label>
                                  <textarea class="form-control" type="text" id="brand_polices" name="brand_polices" autofocus>
                                  </textarea>
                              </div>
                              <br>
                              <button class="btn btn-info  btn-sm" type="submit" >
                                Submit
                               </button>
                                
                            </div>
                        </div>

                    </div>
                </div>
              {{-- End Create Brand Profile --}}
              @if (isset($brand))
                <div class="card mb-4">

                  <h5 class="card-header">My Brand Profile Details </h5>
                  <h6 class="card-header">
                   
                     ID: {{$brand->branduuid}}
                     <br><br>
                     Status: {{$brand->status ==  0 ? "No approved yet": 'Aproved'}}
                  
                  </h6>
                  <!-- Account -->
                
                  <form action="/user/seller/update-my-profile" method="post" enctype="multipart/form-data">
                      @csrf
                      @method("put")
                     
                  <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      @if ($brand->brand_logo==null)
                      <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                      @else
                      <img src="../../../brand_logo/{{$brand->brand_logo}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                      @endif
                     
                      <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                          <span class="d-none d-sm-block">Upload Your Brand Logo</span>
                          <i class="bx bx-upload d-block d-sm-none"></i>
                          <input type="file" id="upload" name="brand_logo" class="account-file-input" hidden accept="image/png, image/jpeg" />
                        </label>
            
                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                      </div>
                    </div>
                  </div>
                  <hr class="my-0">
                  <div class="card-body">
                    {{-- <form id="formAccountSettings" method="POST" onsubmit="return false"> --}}
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="name" class="form-label">Full Name</label>
                          <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $brand->name ?? '') }}" autofocus />
                          {{-- <input class="form-control" type="text" id="name" name="name"  autofocus /> --}}
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="email" class="form-label">E-mail</label>
                          <input class="form-control" type="text" id="email"  name="email" value="{{ old('email', $brand->email ?? '') }}"  />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">WhatsApp Number</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">AFG (+93)</span>
                            <input type="text" id="phoneNumber" name="whatsapp" class="form-control" value="{{ old('whatsapp', $brand->whatsapp ?? '') }}"  />
                            {{-- <input type="text" id="phoneNumber" name="whatsapp" class="form-control"   /> --}}
                          </div>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">AFG (+93)</span>
                            <input type="text" id="phoneNumber" name="mobile" class="form-control" value="{{ old('mobile', $brand->mobile ?? '') }}" placeholder="{{$user->mobile}}" />
                            {{-- <input type="text" id="phoneNumber" name="mobile" class="form-control"  /> --}}
                          </div>
                        </div>
                        {{-- <div class="mb-3 col-md-6">
                          <label for="business" class="form-label">Certificate No</label>
                          <input type="text" class="form-control" id="brand_certificate_no" name="brand_certificate_no" value="{{ old('brand_certificate_no', $brand->brand_certificate_no ?? '') }}" />
                       
                        </div> --}}
                        <div class="mb-3 col-md-6">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $brand->address ?? '') }}"  />
                          {{-- <input type="text" class="form-control" id="address" name="address"  /> --}}
                        </div>
                        <div class="mb-3 col-md-3">
                          <label for="city" class="form-label">City</label>
                          <select id="city_id" name="city_id" class="select2 form-select">
                            <option >Select City</option>
                            @foreach ($afg_cities as $city )
                            <option {{$brand->city_id == $city->id? "selected":"14"}} value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                           
                          </select>
                        </div>
                        <div class="mb-3 col-md-3">
                          <label for="zipCode" class="form-label">Zip Code</label>
                          <input type="text" class="form-control" id="zip_code" name="zip_code"value="{{ old('zip_code', $brand->zip_code ?? '') }}" maxlength="6" />
                          
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">Brand Certificate No</label>
                          <input type="text" class="form-control" id="brand_certificate_no" name="brand_certificate_no"value="{{ old('brand_certificate_no', $brand->brand_certificate_no ?? '') }}" maxlength="6" />
                          
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">Update Brand Certificate</label>
                          <input type="file" class="form-control" id="brand_certificate_img" name="brand_certificate_img"value="{{ old('brand_certificate_img', $brand->brand_certificate_img ?? '') }}" maxlength="6" />
                          
                        </div>
                        <div class="mb-3 col-md-12">
                          <label for="zipCode" class="form-label">Brand Certificate</label>
                          @if ($brand->brand_certificate_img==null)
                          <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                          @else
                          <img src="../../../brand_certificate_img/{{$brand->brand_certificate_img}}" alt="user-avatar" class="d-block rounded" max-height="300px" width="100%" />
                          @endif
                        </div>
                        <div class="mb-3 col-md-12 offset-md-2">
                          <label for="name" class="form-label">Your Brand Privacey And Policy </label>
                          <textarea class="form-control" type="text" id="brand_polices" name="brand_polices" autofocus>
                            {{ old('brand_polices', $brand->brand_polices ?? '') }}
                          </textarea>
                      </div>
                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              @endif
            </div>
        </div>
    </div>
@endsection
