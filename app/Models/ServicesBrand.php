<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\ServicesBrand;
use App\Models\BrandGalleryImage;
use App\Models\MobileBrandGalleryImage;
use Carbon\Carbon;
use App\Models\ServiceName;

class ServicesBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'logo',
        'slug',
        'brand_name',
        'address',
        'phone_number',
        'whatsapp_number',
        'email',
        'images',
        'status',
        'about',
        'description',
    ];

// =======================Update Function ========================================
        
    public function updateServiceBrand(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'brand_name' => 'required|max:255',
            // 'description' => 'required',
            // 'about' => 'required',
        ]);
    
        $slug = Str::slug($validatedData['brand_name']);
        $serviceBrand = ServicesBrand::findOrFail($id);
        // dd( $serviceBrand);

     if($request->hasFile("logo")){
        if (File::exists("service-brand/logo/".$serviceBrand->logo)) {
            File::delete("service-brand/logo/".$serviceBrand->logo);
        }
        $file=$request->file("logo");
        $serviceBrand->logo=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("service-brand/logo/"),$serviceBrand->logo);
        $request['logo']=$serviceBrand->logo;

    }
        // update desktop banner Images if present
        if ($request->hasFile("images")) {
            $files = $request->file("images");

            foreach ($files as $file) {
                
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("service-brand/gallery/"), $imageName);
    
                // Create BrandGalleryImage instance
                $brandGalleryImage = new BrandGalleryImage();
                $brandGalleryImage->service_brand_id = $serviceBrand->id; 
                $brandGalleryImage->image = $imageName;
                $brandGalleryImage->save();
            }
        }
              // update mobile Banner Images if present
              if ($request->hasFile("mobileImages")) {
                $files = $request->file("mobileImages");

                foreach ($files as $file) {
                    
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path("service-brand/mobile-gallery/"), $imageName);
        
                    // Create BrandGalleryImage instance
                    $mobilBrandGalleryImage = new MobileBrandGalleryImage();
                    $mobilBrandGalleryImage->service_brand_id = $serviceBrand->id; 
                    $mobilBrandGalleryImage->image = $imageName;
                    $mobilBrandGalleryImage->save();
                }
            }
        $serviceBrand->update([
            "service_id" => $request->service_id,
            "user_id" => $request->user_id,
            "brand_name" => $request->brand_name,
            "slug" => $slug.'-'.time(),
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "whatsapp_number" => $request->whatsapp_number,
            "description" => $request->description,
            "about" => $request->about,
            "address" => $request->address,
            "logo"=>$serviceBrand->logo,            
        ]);
        return back();
       

    }


// =======================Stor Function ========================================
public function store(Request $request){

        // dd($request->all());
    $validatedData = $request->validate([
        'brand_name' => 'required|max:255',
        // 'description' => 'required',
        // 'about' => 'required',
    ]);

    $slug = Str::slug($validatedData['brand_name']);
    $originalSlug = $slug;
    $count = 1;

    // Ensure unique slug
    while (ServicesBrand::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }

    // Create Service Brand
    $serviceBrand = new ServicesBrand([
        "service_id" => $request->service_id,
        "user_id" => $request->user_id,
        "brand_name" => $request->brand_name,
        "slug" => $slug.'-'.time(),
        "phone_number" => $request->phone_number,
        "email" => $request->email,
        "whatsapp_number" => $request->whatsapp_number,
        "description" => $request->description,
        "about" => $request->about,
        "address" => $request->address,
    ]);
    $serviceBrand->save();

    // Store Logo if present
    if ($request->hasFile("logo")) {
        $file = $request->file("logo");
        $logo = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path("service-brand/logo/"), $logo);
        $serviceBrand->logo = $logo;
        $serviceBrand->save();
    }

    // Store Desktop banner Images if present
    if ($request->hasFile("images")) {
        $files = $request->file("images");

        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("service-brand/gallery/"), $imageName);

            // Create BrandGalleryImage instance
            $brandGalleryImage = new MobileBrandGalleryImage();
            $brandGalleryImage->service_brand_id = $serviceBrand->id; 
            $brandGalleryImage->image = $imageName;
            $brandGalleryImage->save();
        }
    }

      // Store mobile Banner Images if present
      if ($request->hasFile("mobileImages")) {
        $files = $request->file("mobileImages");

        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("service-brand/mobile-gallery/"), $imageName);

            // Create mobileBrandGalleryImage instance
            $mobileBrandGalleryImage = new MobileBrandGalleryImage();
            $mobileBrandGalleryImage->service_brand_id = $serviceBrand->id; 
            $mobileBrandGalleryImage->image = $imageName;
            $mobileBrandGalleryImage->save();
        }
    }

    // Redirect back
    return back();
}


        
        public function brandGalleryImages()
        {
            return $this->hasMany('App\Models\BrandGalleryImage', 'service_brand_id');
        }

        public function mobileBrandGalleryImages()
        {
            return $this->hasMany('App\Models\MobileBrandGalleryImage', 'service_brand_id');
        }


        public function hotelRoomAndHall()
        {
            return $this->hasMany('App\Models\HotelRoomAndHall', 'service_brand_id');
        }

        public function foodMenu()
        {
            return $this->hasMany('App\Models\FoodMenu', 'service_brand_id');
        }



        public function user()
        {
            return $this->belongsTo(User::class);
        }

        // public function serviceNames()
        // {
        //     return $this->belongsTo(ServiceName::class);
        // }

        /**
     * Get the service name that belongs to the service brand.
     */
    public function serviceName()
    {
        return $this->belongsTo(ServiceName::class, 'service_id');
    }
        
        public function toggleIsActive()
        {
               $this->status = !$this->status;
               return $this;
        }
       
}
