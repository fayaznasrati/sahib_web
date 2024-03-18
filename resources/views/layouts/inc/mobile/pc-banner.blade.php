

<p style="color: white">.</p>

<div class="ad_banners_card">
  @foreach ($pc_banners as $banner)
    <a href="{{ $banner->url }}">
    <img src="../../../cover/banner/{{ $banner->cover }}" alt="{{ $banner->name }}">
    </a>            
  @endforeach 
</div>