<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\ServicesBrand;
use App\Models\HotelRoomAndHallImage;
use Carbon\Carbon;
class HotelRoomAndHall extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_brand_id',
        'cover',
        'slug',
        'name',
        'price',
        'status',
        'description',
    ];

// =======================Update Function ========================================
public function updateHotelRoomAndHall(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        // 'description' => 'required',
        // 'about' => 'required',
    ]);

    $slug = Str::slug($validatedData['name']);
    $hotelRoomAndHall = HotelRoomAndHall::findOrFail($id);

    if ($request->hasFile("cover")) {
        if (File::exists("service-brand/hotel-room-cover/" . $hotelRoomAndHall->cover)) {
            File::delete("service-brand/hotel-room-cover/" . $hotelRoomAndHall->cover);
        }
        $file = $request->file("cover");
        $coverFileName = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path("service-brand/hotel-room-cover/"), $coverFileName);
        $hotelRoomAndHall->cover = $coverFileName;
    }

    if ($request->hasFile("images")) {
        $files = $request->file("images");

        foreach ($hotelRoomAndHall->hotelRoomAndHallImages as $img) {
            if (File::exists("service-brand/hotel-room-images/" . $img->image)) {
                File::delete("service-brand/hotel-room-images/" . $img->image);
            }
        }

        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("service-brand/hotel-room-images/"), $imageName);

            $hotelRoomAndHallImage = new HotelRoomAndHallImage();
            $hotelRoomAndHallImage->hotel_room_and_hall_id = $hotelRoomAndHall->id;
            $hotelRoomAndHallImage->image = $imageName;
            $hotelRoomAndHallImage->save();
        }
    }

    $hotelRoomAndHall->update([
        "hotel_room_and_hall_id" => $request->hotel_room_and_hall_id,
        "name" => $request->name,
        "slug" => $slug . '-' . time(),
        "price" => $request->price,
        "description" => $request->description,
        "cover" => $hotelRoomAndHall->cover,
    ]);

    return back();
}
    // public function updateHotelRoomAndHall(Request $request, $id)
    // {
    //     // dd($request->all());
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         // 'description' => 'required',
    //         // 'about' => 'required',
    //     ]);
    
    //     $slug = Str::slug($validatedData['name']);
    //     $foodMenu = HotelRoomAndHall::findOrFail($id);
    //     // dd( $HotelRoomAndHall);

    //  if($request->hasFile("cover")){
    //     if (File::exists("service-brand/hotel-room-cover/".$HotelRoomAndHall->cover)) {
    //         File::delete("service-brand/hotel-room-cover/".$HotelRoomAndHall->cover);
    //     }
    //     $file=$request->file("cover");
    //     $HotelRoomAndHall->cover=time()."_".$file->getClientOriginalName();
    //     $file->move(\public_path("service-brand/hotel-room-cover/"),$HotelRoomAndHall->cover);
    //     $request['cover']=$HotelRoomAndHall->cover;

    //   }
    //     // update food Menu Images if present
    //     if ($request->hasFile("images")) {
    //         $files = $request->file("images");

    //         foreach($HotelRoomAndHall->HotelRoomAndHallImages as $img){
    //             // if (File::exists("service-brand/food-menu-images/".$img->image)) {
    //             //     File::delete("service-brand/food-menu-images/".$img->image);
    //             // }
    //         }
    //         foreach ($files as $file) {
    //             if (File::exists("service-brand/hotel-room-images/".$img->image)) {
    //                 File::delete("service-brand/hotel-room-images/".$img->image);
    //             }
    //             $imageName = time() . '_' . $file->getClientOriginalName();
    //             $file->move(public_path("service-brand/hotel-room-images/"), $imageName);
    
    //             // Create HotelRoomAndHallImage instance
    //             $HotelRoomAndHallImage = new HotelRoomAndHallImage();
    //             $HotelRoomAndHallImage->hotel_room_and_hall_id = $HotelRoomAndHall->id; 
    //             $HotelRoomAndHallImage->image = $imageName;
    //             $HotelRoomAndHallImage->save();
    //         }
    //     }
    //     $HotelRoomAndHall->update([
    //         "hotel_room_and_hall_id" => $request->hotel_room_and_hall_id,
    //         "name" => $request->name,
    //         "slug" => $slug.'-'.time(),
    //         "price" => $request->price,
    //         "description" => $request->description,
    //         "cover"=>$HotelRoomAndHall->cover,            
    //     ]);
    //     return back();
       

    // }


// =======================Stor Function ========================================

public function store(Request $request)
{
    // Validate input data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'service_brand_id' => 'required', // Add validation for other fields if needed
        'price' => 'required',
        'description' => 'nullable', // Adjust as per your requirements
        'cover' => 'nullable|image|max:2048', // Validate cover image (optional)
        'images.*' => 'nullable|image|max:2048', // Validate gallery images (optional)
    ]);

    // Generate a unique slug
    $slug = Str::slug($validatedData['name']);
    $originalSlug = $slug;
    $count = 1;

    while (HotelRoomAndHall::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }

    // Create a new HotelRoomAndHall instance
    $hotelRoomAndHall = new HotelRoomAndHall([
        'service_brand_id' => $validatedData['service_brand_id'],
        'name' => $validatedData['name'],
        'slug' => $slug . '-' . time(),
        'price' => $validatedData['price'],
        'description' => $validatedData['description'],
    ]);

    // Store cover image if present
    if ($request->hasFile('cover')) {
        $file = $request->file('cover');
        $cover = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('service-brand/hotel-room-cover/'), $cover);
        $hotelRoomAndHall->cover = $cover;
    }

    // Save the HotelRoomAndHall instance
    $hotelRoomAndHall->save();

    // Store gallery images if present
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('service-brand/hotel-room-images/'), $imageName);

            // Create HotelRoomAndHallImage instance
            $hotelRoomAndHallImage = new HotelRoomAndHallImage([
                'hotel_room_and_hall_id' => $hotelRoomAndHall->id,
                'image' => $imageName,
            ]);
            $hotelRoomAndHallImage->save();
        }
    }

    // Redirect back
    return back();
}



        public function HotelRoomAndHallImages(){
            return $this->hasMany(HotelRoomAndHallImage::class);
        }

        public function servicesBrand(){
            return $this->belongsTo(ServicesBrand::class,'service_brand_id');
        }

        public function toggleIsActive()
        {
               $this->status = !$this->status;
               return $this;
        }
        
}
