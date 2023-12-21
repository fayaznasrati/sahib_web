@extends('layouts/contentNavbarLayout')

@section('title', 'topMenus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Top Menu /</span> @if (isset($topMenu)) Update @else Create @endif Top Menu
 
</h4>

@include('content.alert.alert')
<div class="row">

    <div class="card mb-4">
      <h5 class="card-header">Create New Top Menu</h5>
      <div class="card-body">
     
        @if (isset($topMenu))
        <form action="{{ route('topMenus.update', $topMenu->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
    <form action="{{ route('topMenus.store') }}" method="POST" enctype="multipart/form-data">
    @endif
     @csrf
        <div class="form-floating">
            <div class="row">
              <div class="col-md-3">
                <div class="form-floating">
                <input type="file" name="icon" value="{{ old('icon', $topMenu->icon ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Icon</label>
                <div id="floatingInputHelp" class="form-text">
                  @if (isset($topMenu))
                  <img src="../../../topMenu-icon/{{$topMenu->icon}}" alt="topMenu icon" style="height: auto; width:20px">
                  Update @else choose  @endif the Icon of topMenu here (Optional)
                  </div>
            </div>
            </div>
              <div class="col-md-3">
                  <div class="form-floating">
                  <input type="text" name="name" value="{{ old('name', $topMenu->name ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                  <label for="floatingInput">Title</label>
                  <div id="floatingInputHelp" class="form-text"> @if (isset($topMenu)) Update @else Write @endif the name of topMenu here</div>
              </div>
             </div>
                <div class="col-md-3">
                    <div class="form-floating">

                    <input type="text"  name="url" value="{{ old('url', $topMenu->url ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: https://sahib.af/index" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">URL</label>
                    <div id="floatingInputHelp" class="form-text">@if (isset($topMenu)) Update @else Write @endif  the url of  topMenu here (optional)</div>
                </div>
            </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-lg btn-dark">@if (isset($topMenu)) Update @else Create @endif</button>
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
            <th>Icon</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Url</th>
            <th>Actions</th>
          </tr>
        </thead> @php
            $i=1
        @endphp
        <tbody class="table-border-bottom-0">
            @foreach ($topMenus as $topMenu )
          <tr>
            <td>{{$i++}}</td>
            <td>
              @if ($topMenu->icon != 'noimage.png')
              <img src="../../../topMenu-icon/{{$topMenu->icon}}" alt="topMenu icon" style="height: auto; width:20px">
                @else
                No Icon Needed
              @endif
            </td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$topMenu->name}}</strong></td>
            <td>{{$topMenu->slug}}</td>

            <td>
              @if ($topMenu->url != null)
              <a href="{{$topMenu->url}}" target="_blank" rel="noopener noreferrer">{{$topMenu->url}}</a></td>
              
              @else
                No URL Needed
              @endif
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('topMenus.edit',$topMenu->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <form id="delete-form" action="{{ route('topMenus.destroy', $topMenu->id) }}" method="post">
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


