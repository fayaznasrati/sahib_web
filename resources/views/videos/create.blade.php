@extends('layouts.app')

@section('title', 'index')
@section('content')

        {{-- <div class="pc-design">
          @include('layouts.inc.mobile.pc-content')
        </div>


        <div class="mobile-design">
          @include('layouts.inc.mobile.mobile-content')
        </div> --}}
        <form action="{{ route('short.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="video">Choose a video:</label>
                <input type="file" name="filename" id="video" accept="video/mp4" required>
            </div>
            <button type="submit">Upload</button>
        </form>


@endsection

