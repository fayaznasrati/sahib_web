@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Menu /</span> @if (isset($menu)) Update @else Create @endif Menu
 
</h4>
{{-- @if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif --}}
@include('content.alert.alert')
<div class="row">

    <div class="card mb-4">
      <h5 class="card-header">Create New Menu</h5>
      <div class="card-body">
     
        @if (isset($menu))
        <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @endif
     @csrf
        <div class="form-floating">
            <div class="row">
              <div class="col-md-2">
                <select id="largeSelect"  name="top_menu_id" class="form-select form-select-lg">
                  <option>Select Top Menu</option>
                  @foreach ($topMenus as $topmenu )
                  <option
                   @if (isset($menu)){{$menu->top_menu_id == $topmenu->id ? 'selected': ''}} @endif
                   value="{{$topmenu->id}}">{{$topmenu->name}}</option>
                  @endforeach
                </select>
                <div id="floatingInputHelp" class="form-text">Selec the parent Top Menu</div>
              </div>
              <div class="col-md-2">
                <div class="form-floating">
                <input type="file" name="icon" value="{{ old('icon', $menu->icon ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                <label for="floatingInput">Icon</label>
                <div id="floatingInputHelp" class="form-text">
                  @if (isset($menu))
                  <img src="../../../menu-icon/{{$menu->icon}}" alt="menu icon" style="height: auto; width:20px">
                  Update @else choose  @endif the Icon of menu here
                  </div>
            </div>
            </div>
              <div class="col-md-3">
                  <div class="form-floating">
                  <input type="text" name="name" value="{{ old('name', $menu->name ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                  <label for="floatingInput">Title</label>
                  <div id="floatingInputHelp" class="form-text"> @if (isset($menu)) Update @else Write @endif the name of menu here</div>
              </div>
             </div>
               
                <div class="col-md-3">
                    <div class="form-floating">

                    <input type="text"  name="url" value="{{ old('url', $menu->url ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: https://sahib.af/index" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">URL</label>
                    <div id="floatingInputHelp" class="form-text">@if (isset($menu)) Update @else Write @endif  the url of  menu here</div>
                </div>
            </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-lg btn-dark">@if (isset($menu)) Update @else Create @endif</button>
                    </div>
            </div>
            </div>

          </div>
        </form>
      </div>
    </div>

{{-- table of menus --}}
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#No</th>
            <th>Icon</th>
            <th>Name</th>
            <th>Top Menu</th>
            {{-- <th>Slug</th>
            <th>Url</th> --}}
            <th>Actions</th>
          </tr>
        </thead> @php
            $i=1
        @endphp
        <tbody class="table-border-bottom-0">
            @foreach ($menus as $menu )
          <tr>
            <td>{{$i++}}</td>
            <td><img src="../../../menu-icon/{{$menu->icon}}" alt="menu icon" style="height: auto; width:20px"></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$menu->name}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$menu->topMenu->name}}</strong></td>
            {{-- <td>{{$menu->slug}}</td>
            <td><a href="{{$menu->url}}" target="_blank" rel="noopener noreferrer">{{$menu->url}}</a></td> --}}
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('menus.edit',$menu->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <form id="delete-form" action="{{ route('menus.destroy', $menu->id) }}" method="post">
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


