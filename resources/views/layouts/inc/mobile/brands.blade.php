<div class="brands-scrolling-wrapper">
@foreach ($sellerBrand as $brand)
<div class="brands_my_card"><a href="/seller/comapany-info/{{ $brand->slug }}">
    <img style="max-height: 600px" class="fit-image" src="../../../../brand_logo/{{ $brand->brand_logo }}" alt="{{ $brand->name }}"> 
    <br>
    <label>{{ Str::limit($brand->name, 6) }}</label  ><br>
        <center> 
        <div class="circle"></div>
        </center>
    </a>            
</div>
@endforeach

</div>