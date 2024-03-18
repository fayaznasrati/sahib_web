<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Sahib.af') - Sahaib.af</title>

    @include("layouts.inc.header-links")
</head>
<body>

<div class="app_videos">
    @foreach ( $videos as  $video)
        
    <!-- Video start  -->
    <div class="video">
        <video  src="short_videos/{{$video->filename}}" class="video_player"></video>
        <div class="videoSidbar">
            <div class="videoSidbar_button">
                <a href="#" data-video-id="{{ $video->id }}" class="like-button" >
                    <i class="pe-7s-like likedbutton"></i>
                </a>
                <p>{{ $video->likes_count }}</p>
               
            </div>
            <div class="videoSidbar_button">
                <a href="#">
                    <i class="pe-7s-comment"></i>
                    <p>23</p></a>
            </div>
            <div class="videoSidbar_button">
                <a href="#">
                    <i class="pe-7s-share"></i>
                    <p>23</p></a>
            </div>
        </div>
        <div class="videoFooter">
            <div class="videoFooter_text">
                <h5>
                @if ($video->user->dp_image != null)
                    <span><img src="../../dp_images/{{ $video->user->dp_image }}" alt="{{$video->user->dp_image}}"></span >
                @else
                <span> <img  src="../../assets/img/avatars/no-user-img.png" alt="user-avatar"></span>
                @endif                       
                        {{$video->user->name}}</h5>
                <p class="videoFooter_description">
                    {{$video->title}}
                </p>
            </div>
        </div>
    </div>
    <!-- Video end  -->
    @endforeach
    {{-- <!-- Video start  -->
    <div class="video">
        <video src="{{ asset('assets/short_videos/test2.mp4') }}" class="video_player"></video>
        <div class="videoSidbar">
            <div class="videoSidbar_button">
                <a href="#">
                    <i class="pe-7s-like"></i>
                    <p>23</p></a>
            </div>
            <div class="videoSidbar_button">
                <a href="#">
                    <i class="pe-7s-comment"></i>
                    <p>23</p></a>
            </div>
            <div class="videoSidbar_button">
                <a href="#">
                    <i class="pe-7s-share"></i>
                    <p>23</p></a>
            </div>
        </div>
        <div class="videoFooter">
            <div class="videoFooter_text">
                <h5>
                    <span><img src="{{ asset('assets/img/avatars/1.png') }}" alt=""></span> Asee Nasrati</h5>
                <p class="videoFooter_description">
                    Best Video Ever the video description here
                </p>
            </div>
        </div>
    </div>
    <!-- Video end  --> --}}
</div>

@include("layouts.inc.bottom-navbar")
</body>
@include("layouts.inc.footer-links")

<script>
    var csrf_token = "{{ csrf_token() }}";
</script>

</html>
