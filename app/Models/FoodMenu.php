<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\ServicesBrand;
use App\Models\FoodMenuImage;
use Carbon\Carbon;
class FoodMenu extends Model
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
        
    public function updateFoodMenu(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'description' => 'required',
            // 'about' => 'required',
        ]);
    
        $slug = Str::slug($validatedData['name']);
        $foodMenu = FoodMenu::findOrFail($id);
        // dd( $foodMenu);

     if($request->hasFile("cover")){
        if (File::exists("service-brand/food-menu-cover/".$foodMenu->cover)) {
            File::delete("service-brand/food-menu-cover/".$foodMenu->cover);
        }
        $file=$request->file("cover");
        $foodMenu->cover=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("service-brand/food-menu-cover/"),$foodMenu->cover);
        $request['cover']=$foodMenu->cover;

      }
        // update food Menu Images if present
        if ($request->hasFile("images")) {
            $files = $request->file("images");

            foreach($foodMenu->foodMenuImages as $img){
                // if (File::exists("service-brand/food-menu-images/".$img->image)) {
                //     File::delete("service-brand/food-menu-images/".$img->image);
                // }
            }
            foreach ($files as $file) {
                if (File::exists("service-brand/food-menu-images/".$img->image)) {
                    File::delete("service-brand/food-menu-images/".$img->image);
                }
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("service-brand/food-menu-images/"), $imageName);
    
                // Create foodMenuImage instance
                $foodMenuImage = new FoodMenuImage();
                $foodMenuImage->food_menu_id = $foodMenu->id; 
                $foodMenuImage->image = $imageName;
                $foodMenuImage->save();
            }
        }
        $foodMenu->update([
            "food_menu_id" => $request->food_menu_id,
            "name" => $request->name,
            "slug" => $slug.'-'.time(),
            "price" => $request->price,
            "description" => $request->description,
            "cover"=>$foodMenu->cover,            
        ]);
        return back();
       

    }


// =======================Stor Function ========================================
 public function store(Request $request){
        // dd($request->all());
    $validatedData = $request->validate([
        'name' => 'required|max:255',
    ]);

    $slug = Str::slug($validatedData['name']);
    $originalSlug = $slug;
    $count = 1;

    // Ensure unique slug
    while (FoodMenu::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }
  
    // Create Service Brand
    $foodMenu = new FoodMenu([
        "service_brand_id" => $request->service_brand_id,
        "name" => $request->name,
        "slug" => $slug.'-'.time(),
        "price" => $request->price,
        "description" => $request->description,
    ]);
   
        // Store Logo if present
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $cover = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("service-brand/food-menu-cover/"), $cover);
            $foodMenu->cover = $cover;
            $foodMenu->save();
        }
        $foodMenu->save();

    // Store Gallery Images if present
    if ($request->hasFile("images")) {
        $files = $request->file("images");

        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("service-brand/food-menu-images/"), $imageName);

            // Create foodMenuImage instance
            $foodMenuImage = new FoodMenuImage();
            $foodMenuImage->food_menu_id = $foodMenu->id; 
            $foodMenuImage->image = $imageName;
            $foodMenuImage->save();
        }
    }

    // Redirect back
    return back();
}


        public function foodMenuImages(){
            return $this->hasMany(FoodMenuImage::class);
        }

        public function toggleIsActive()
        {
               $this->status = !$this->status;
               return $this;
        }
        
}
