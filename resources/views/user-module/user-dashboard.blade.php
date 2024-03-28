@extends("layouts.user-dashboard-app")
@section("user-dashboard-content")



 <!-- Shop Section Start -->
 <div class="section section-margin">

  @error('delete_confirm')
  <div class="toast-body">
    {{ $message }}
  </div>
  @enderror  

    <div class="container">

        <div class="row">
        <div class="row">
            <div class="col-md-12">

              <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                @if (isset($user))
                    
              
            <form action="/user/update-my-profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    @endif
                <div class="card-body">
                  <div class="d-flex align-items-start align-items-sm-center gap-4">
                    @if ($user->dp_image==null)
                    <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    @else
                    <img src="../../../dp_images/{{$user->dp_image}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    @endif
                   
                    <div class="button-wrapper">
                      <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload Your photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input type="file" id="upload" name="dp_image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                      </label>
                      {{-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                      </button> --}}
          
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
                        <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" autofocus />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" disabled name="email" value="{{ old('email', $user->email ?? '') }}"  />
                        <input class="form-control" type="text" id="email" hidden name="email" value="{{ old('email', $user->email ?? '') }}"  />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">WhatsApp Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">AFG (+93)</span>
                          <input type="text" id="phoneNumber" name="whatsapp" class="form-control" value="{{ old('whatsapp', $user->whatsapp ?? '') }}"  />
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">AFG (+93)</span>
                          <input type="text" id="phoneNumber" name="mobile" class="form-control" value="{{ old('mobile', $user->mobile ?? '') }}" placeholder="{{$user->mobile}}" />
                        </div>
                      </div>
                      {{-- <div class="mb-3 col-md-6">
                        <label for="business" class="form-label">Business Name</label>
                        <input type="text" class="form-control" id="business" name="business" value="{{ old('business', $user->business ?? '') }}" />
                      </div> --}}
                      <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address ?? '') }}"  />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="city" class="form-label">City</label>
                        <select id="city_id" name="city_id" class="select2 form-select">
                          <option >Select City</option>
                          @foreach ($afg_cities as $city )
                          <option {{$user->city_id == $city->id? "selected":"14"}} value="{{$city->id}}">{{$city->name}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                      {{-- <div class="mb-3 col-md-6">
                        <label for="zipCode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code"value="{{ old('zip_code', $user->zip_code ?? '') }}" maxlength="6" />
                      </div> --}}
                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  {{-- </form> --}}
                </div>
                <!-- /Account -->
              </div>
            </form>
              {{-- <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                  <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                      <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                      <p class="mb-0">Once you delete your account, All your Posts will be removed, there is no going back. Please be certain.</p>
                    </div>
                  </div>
                  <form action="/user/delete-my-account/{{ $user->id }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="form-check mb-3">
                      <input class="form-check-input"  type="checkbox" name="delete_confirm" id="delete_confirm" />
                      <label class="form-check-label" for="delete_confirm">I confirm my account deactivation</label>
                    </div>
                    <button type="submit"  class="btn btn-danger deactivate-account">Deactivate Account</button>
                  </form>

                
                </div>
              </div> --}}
            </div>
          </div>
          
        </div>
    </div>
</div>
<!-- Shop Section End -->

@endsection