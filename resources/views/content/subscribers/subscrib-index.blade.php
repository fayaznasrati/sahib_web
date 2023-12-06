@extends('layouts/contentNavbarLayout')

@section('title', 'Subascribers')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Subascribers Manager / </span> Subascribers List
 
</h4>
@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif
<div class="row">



{{-- table of menus --}}
<!-- Basic Bootstrap Table -->
<!-- Striped Rows -->
<div class="card">
    <h5 class="card-header">Subscribers List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#No</th>
            <th>Name</th>
            <th>Emial</th>
            <th>Subscibed at</th>
            {{-- <th>Actions</th> --}}
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i = 1 @endphp
         @foreach ($subscribers as $subscrib )
          <tr>
            <td>{{$i++}}</td>
            <td>{{$subscrib->name}}</td>
            <td> <a href="mailto:{{$subscrib->email}}">{{$subscrib->email}}</a></td>
            <td>{{$subscrib->updated_at}}</td>
            
            {{-- <td><div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('subscribers.edit',$subscrib->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="{{route('subscribers.show',$subscrib->id)}}"><i class="bx bx-show-alt me-1"></i> View</a>
                  <form id="delete-form" action="{{ route('subscribers.destroy', $subscrib->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="dropdown-item" type="submit" ><i class="bx bx-trash me-1"></i>Delete</button>                  
                    </form>
                </div>
              </div>
            </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  {{ $subscribers->links() }}
<br>
  </div>

  <!--/ Striped Rows -->
@endsection


