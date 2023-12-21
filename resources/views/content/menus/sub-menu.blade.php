@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Menu /</span> @if (isset($menu)) Update @else Create @endif Sub-Menu
 
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
      <h5 class="card-header">Create New Menu</h5>
      <div class="card-body">
     
        @if (isset($submenu))
        <form action="{{ route('submenus.update', $submenu->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
    <form action="{{ route('submenus.store') }}" method="POST" enctype="multipart/form-data">
    @endif
     @csrf
        <div class="form-floating">
            <div class="row">
              <div class="col-md-3">
                <select id="largeSelect"  name="menu_id" class="form-select form-select-lg">
                  <option>Select Menu</option>
                  @foreach ($menus as $menu )
                  <option @if (isset($submenu))
                  {{$submenu->menu_id == $menu->id ? 'selected': ''}}
                      
                  @endif value="{{$menu->id}}">{{$menu->name}}</option>
                  @endforeach
                </select>
                <div id="floatingInputHelp" class="form-text">Selec the parent Menu</div>
              </div>
                <div class="col-md-3">
                    <div class="form-floating">
                    <input type="text" name="name" value="{{ old('name', $submenu->name ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: Home" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Title</label>
                    <div id="floatingInputHelp" class="form-text">Write the name of the menu here</div>
                </div>
            </div>
                {{-- <div class="col-md-3">
                    <div class="form-floating">

                    <input type="text"  name="slug" value="{{ old('slug', $submenu->slug ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: home-slug" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Slug</label>
                    <div id="floatingInputHelp" class="form-text">Write the Slug of the menu here</div>
            </div>
            </div> --}}
                <div class="col-md-3">
                    <div class="form-floating">

                    <input type="text"  name="url" value="{{ old('url', $submenu->url ?? '') }}" class="form-control" id="floatingInput" placeholder="eg: https://sahib.af/index" aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">URL</label>
                    <div id="floatingInputHelp" class="form-text">Write the url of the menu here</div>
                </div>
            </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-lg btn-dark">@if (isset($submenu)) Update @else Create @endif</button>
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
    <h5 class="card-header">Sub Menus Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#No</th>
            <th>Parent Menu</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Url</th>
            <th>Actions</th>
          </tr>
        </thead>
          @php $i=1 @endphp
        <tbody class="table-border-bottom-0">
            @foreach ($submenus as $submenu )
          <tr><td>{{$i++}}</td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$submenu->menu->name}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$submenu->name}}</strong></td>
            <td>{{$submenu->slug}}</td>
            <td><a href="{{$submenu->url}}" target="_blank" rel="noopener noreferrer">{{$submenu->url}}</a></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('submenus.edit',$submenu->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <form id="delete-menu" action="{{ route('submenus.destroy', $submenu->id) }}" method="post">
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
      <br>
        <!-- Render pagination links -->
{{ $submenus->links() }}
<br>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

</div>
@endsection
