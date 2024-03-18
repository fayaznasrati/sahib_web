@extends('layouts/contentNavbarLayout')

@section('title', 'services name')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">service /</span> @if (isset($service)) Update @else Create @endif Service Name
 
</h4>

@include('content.alert.alert')
<div class="row">

    <div class="card mb-4">
      <h5 class="card-header">Create New service Name</h5>
      <div class="card-body">
     
        @if (isset($service))
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @endif
     @csrf
        <div class="form-floating">
            <div class="row">
         
              <div class="col-md-5">
                  <div class="form-floating">
                  <input type="text" name="service_name" value="{{ old('service_name', $service->service_name ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                  <label for="floatingInput">name of service</label>
                  <div id="floatingInputHelp" class="form-text"> @if (isset($service)) Update @else Write @endif the name of service here</div>
              </div>
             </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-lg btn-dark">@if (isset($service)) Update @else Create @endif</button>
                    </div>
            </div>
            </div>

          </div>
        </form>
      </div>
    </div>

{{-- table of topMenus --}}
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#No</th>
            <th>Service Name</th>
            <th>Actions</th>
          </tr>
        </thead> @php
            $i=1
        @endphp
        <tbody class="table-border-bottom-0">
            @foreach ($services as $service )
          <tr>
            <td>{{$i++}}</td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$service->service_name}}</strong></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('services.edit',$service->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <form id="delete-form" action="{{ route('services.destroy', $service->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="dropdown-item" type="submit" ><i class="bx bx-trash me-1"></i>Delete</button>                  
                    </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
</div>

@endsection


