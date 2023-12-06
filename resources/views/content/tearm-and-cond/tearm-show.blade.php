@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection
<!-- In your blade template -->

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"><a href="/admin/tearms">Tearms</a> /</span> Tearm & Condations
</h4>



{{-- table of tearms --}}
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Tearm And Condation on {{$tearm->tearm_on}}
      <a href="{{ route('tearms.edit',$tearm->id) }}"><button type="button" class="btn btn-outline-info">Edit</button></a>    
     <div class="card-body">
        {!! $tearm->tearm_and_condation !!}
     </div>
  </div>
  <!--/ Basic Bootstrap Table -->
</div>

@endsection


