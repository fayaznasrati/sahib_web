@extends('layouts.app')

@section('title', 'index')
@section('content')

        <div class="pc-design">
          @include('layouts.inc.mobile.pc-content')
        </div>


        <div class="mobile-design">
          @include('layouts.inc.mobile.mobile-content')
        </div>

        @include('layouts.inc.filter-products')

@endsection

