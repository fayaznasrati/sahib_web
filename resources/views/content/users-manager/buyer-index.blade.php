@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<div class="row">
@include('content.alert.alert')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Users Manager / </span> Buyers List
</h4>
@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif
<div class="row">

    <div class="card mb-4">
      <h5 class="card-header">Filter users by:</h5>
      <div class="card-body">
    <form action="{{ route('admin-user-filter') }}" method="get" enctype="multipart/form-data">
     @csrf
        <div class="form-floating">
            <div class="row">
                  <div class="col-md-2  ">
                    <label for="exampleFormControlInput1" class="form-label">User ID</label>
                    <input class="form-control" name="id" type="search" value="user ID ..." id="html5-search-input">
                </div>
                  <div class="col-md-2  ">
                    <label for="exampleFormControlSelect1" class="form-label">Status</label>
                    <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option value="" selected>Select Status</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>

                <div class="col-md-2  ">
                    <label for="html5-date-input" class="form-label">From</label>
                      <input class="form-control" name="start_date" type="date"  placeholder="2022-06-18" id="html5-date-input">
                  </div>
                  <div class="col-md-2  ">
                    <label for="html5-date-input" class="form-label">To</label>
                      <input class="form-control" name="end_date" type="date"  placeholder="2023-07-18" id="html5-date-input">
                  </div>
                  <div class="col-md-2 mt-3 ">
                    <div class="d-grid col-md-12 mx-auto">
                    <label for="html5-date-input" class="form-label"></label>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </div>
                </div>
             </form>

                <div class="col-md-2 mt-3 ">
                  <div class="d-grid col-md-12 mx-auto">
                  <label for="html5-date-input" class="form-label"></label>
                  <button type="reset" class="btn btn-warning">Clear</button>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>

{{-- table of menus --}}
<!-- Basic Bootstrap Table -->
<!-- Striped Rows -->
<div class="card">
  <a href="/admin/users-manager"><h5 class="card-header">All Users</h5></a>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>User ID</th>
            <th>Roule</th>
            <th>DP Profile</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Email</th>
           <th>Mobile</th>
            {{-- <th>Whats App</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip-Code</th>--}}
            <th>Created at</th> 
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <tbody class="table-border-bottom-0">
            @php $i = 1 @endphp
         @foreach ($users as $user )
          <tr>
            
            <td>{{$i++}}</td>
            <td>{{$user->id}}</td>
            <td>@if ($user->role == 1) <span style="color: red">Admin</span>
                @elseif ($user->role == 2) <span style="color: green">Seller</span>
                @else Buyer
               @endif
              {{-- {{$user->role == 1? "Admin": "Buyer"}}</td> --}}
            <td>
              @if ($user->dp_image==null)
              <img src="{{asset('assets/img/avatars/no-user-img.png')}}" alt="No-Image" style="height: auto; width:40px"/>
                @else
              <img src="../dp_images/{{$user->dp_image}}" alt="user image" style="height: auto; width:40px">
              @endif
              </td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
              @if ($user->seller_brand != null)
              <a href="admin/user-brand-info/{{$user->seller_brand->slug}}">{{$user->seller_brand->name}}</a>
              @else
              no brand yet
              @endif
              {{-- {{$user->seller_brand != null ?$user->seller_brand->name:'No_Brand'}} --}}

            </strong></td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile != null ? $user->mobile: "No Mobile" }}</td>
             {{--<td>{{$user->whatsapp != null ? $user->whatsapp: "No WhatsApp"}}</td>
            <td>{{$user->address != null ? $user->address : "No Address" }}</td>
            <td>{{$user->city != null ? $user->city : "No City" }}</td>
            <td>{{$user->zip_code != null ? $user->zip_code : "No Zip Code" }}</td>--}}
            <td>{{$user->created_at}}</td> 
            {{-- <td data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="in 30 days will be expired after date of its createtion">{{$user->exprire_at == null ? "in 30 Days": $user->exprire_at}}</td> --}}
             <td data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"  title=" {{$user->status == 1? "De activate User": "Activate User"}}">
                 <div class="form-check form-switch mb-2">
                  <input data-pid="{{$user->id}}" class="form-check-input admin_user_status_btn" type="checkbox" id="flexSwitchCheckChecked" {{$user->status == 1? "checked": ""}}>
                 </div>
                <input type="hidden" name="id" value="{{$user->id}}">   
             </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin-user-edit',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="{{route('admin-user-show',$user->id)}}"><i class="bx bx-show-alt me-1"></i> View</a>
                  {{-- <form id="delete-form" action="{{route('admin-user-delete', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="dropdown-item" type="submit" ><i class="bx bx-trash me-1"></i>Delete</button>                  
                    </form> --}}
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- {{ $users->links() }} --}}
    </div>
  </div>
  <!--/ Striped Rows -->

@endsection


