<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Models\BrandGalleryImage;
use App\Models\MobileBrandGalleryImage;
use App\Models\ServicesBrand;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\toggleIsActive;
use App\Models\Posts\updatePost;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ServiceName;
use App\Models\FoodMenu;
use App\Models\AfgCity;
use App\Models\HotelRoomAndHall;
use App\Models\HotelRoomAndHallImage;
use App\Models\FoodMenuImage;
class ServiceBrandController extends Controller
{

    // public function __construct() 
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $posts=Posts::latest()->where('user_id',Auth::id())->paginate(5);
    //     // dd($posts);
    //     return view('seller-module.my-ad-list')->with('posts',$posts);

    // }

    public function createServiceBrand(Request $request ){
            // dd($request->all());
            $servicebrand = new ServicesBrand();
            $servicebrand->store($request);
             return redirect('/user/service-brand-dashboard')->with("success"," Service Brand Created Successfully");
    }

    public function serviceBrandDashboard(){
    $user = User::find(Auth::id());
    $brand = ServicesBrand::where('user_id', Auth::id())->latest()->first();
    $afg_cities = AfgCity::get();
    $services_name = ServiceName::get();
    // dd($brand);
    return view('services-module.index', compact('user','afg_cities','brand','services_name'));
    }

    public function createServiceBrandProduct(){
        $brand = ServicesBrand::where('user_id', Auth::id())->latest()->first();
        $services_name = ServiceName::get();
        // dd($brand);
        return view('services-module.create-service-pro', compact('brand','services_name'));
        }
    

        public function services_manager(){
        $services = ServicesBrand::orderBy('service_id')->latest()->paginate(10);
        $services_name = ServiceName::get()->all();
        $users = User::get()->all();
        $afg_cities = AfgCity::get();
        return view('content.services-manager.service-index',compact('services','services_name','users','afg_cities'));  
    }

    public function filerServiceBrand(Request $request)
    {

        // dd($request->all());
        $services_name = ServiceName::get()->all();
        $users = User::get()->all();
        // Retrieve the form input
        $status = $request->input('status');
        $serviceName = $request->input('brand_name');
        $serviceId = $request->input('service_id');
    
        // Constructing the query
        $query = ServicesBrand::query();
    
        if ($status !== null) {
            $query->where('status', $status);
        }
    
        if ($serviceName !== null) {
            $query->where('brand_name', 'like', "%$serviceName%");
        }
    
        if ($serviceId !== null) {
            $query->where('service_id', $serviceId);
        }
    
        // Execute the query
        $services = $query->paginate(10);
        $afg_cities = AfgCity::get();
        // Pass the results to the view
        return view('content.services-manager.service-index',compact('services','services_name','users','afg_cities')); 
    }

    public function serviceBrandStatus(request $request){
        $sbId = $request->input('id');
        $sb=ServicesBrand::where('id',$sbId)->first();
        $sb->toggleIsActive()->save();
        return response()->json(['success' => true])->with('success',"status Updated");
    
    }

    // public function seller_posts_manager(){
    //     $name = 'seller';
    //     $posts=Posts::latest()->where('category_type',2)->paginate(5);
    //     $menus = Menu::all();
    //     return view('content.posts-manager.posts-index',compact('posts','menus','name'));  
    // }

    // public function factories_posts_manager(){
    //     $name = 'Factories';
    //     $posts=Posts::latest()->where('category_type',1)->paginate(5);
    //     $menus = Menu::all();
    //     return view('content.posts-manager.posts-index',compact('posts','menus','name')); 
    // }

    // public function adminPostStatus(Request $request)
    // {
    //     // dd($request->all());
    //     $postId = $request->input('postId');
    //     $post=Posts::where('id',$postId)->first();
    //     $post->toggleIsActive()->save();
    //     return response()->json(['success' => true]);
    // }


    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $category = Menu::all();
    //     return view('seller-module.create-ad', ['category' => $category]);
    // }



    // public function adminPostCreate()
    // {
    //     $menus = Menu::all();
    //     return view('content.posts-manager.posts-create', ['menus' => $menus]);
    // }

    public function adminServiceBrandStore(Request $request){
        // dd($request->all());
        $servicebrand = new ServicesBrand();
        $servicebrand->store($request);
         return redirect('/admin/services-brand')->with("success"," Service Brand Created Successfully");
    }




    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
        
    //         // $$id = Posts::findOrFail($id);
    //         $post = new Posts();
    //         $post->store($request);
    //         Alert::success('Success', 'Post Created Successfully');
    //         // Alert::warning("warning", "warning capture");

    //          return redirect('/user/post');
    // }
     
    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $posts=Posts::findOrFail($id);
    //     $category = Menu::all();
    //     $Url = url()->current();
    //     $currentUrl=urlencode($Url);
    //     $subCategory = SubMenu::all();
    //      return view('seller-module.show-ad', compact('posts', 'category', 'subCategory','currentUrl'));
    // }

    // public function adminPostshow(string $id){

    //     $posts=Posts::findOrFail($id);
    //     $menus = Menu::all();
    //     $afgCity = AfgCity::all();
    //     $submenus = Submenu::all();
    //      return view('content.posts-manager.posts-show', compact('posts', 'menus', 'submenus','afgCity'));
    // }


   
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $posts=Posts::findOrFail($id);
    //     $menus = Menu::all();
    //     $submenus = SubMenu::all();
    //      return view('seller-module.edit-post', compact('posts', 'menus', 'submenus'));
    //  }

     public function adminServiceBrandEdit(string $id){
        $services=ServicesBrand::latest()->paginate(5);
        $serv=servicesBrand::findOrFail($id);
        $afg_cities = AfgCity::get();
        $users = User::all();
        $services_name = ServiceName::get()->all();
         return view('content.services-manager.service-index', compact('serv', 'users', 'services_name','services','afg_cities'));
    }


    public function adminServiceBrandUpdate(Request $request,$id){

        $servicebrand = new ServicesBrand();
        $servicebrand->updateServiceBrand($request,$id);
         return redirect('/admin/services-brand')->with("success"," Brand  Updated Successfully"); 
    }

    public function userServiceBrandUpdate(Request $request,$id){
        // dd($request->all());
        $servicebrand = new ServicesBrand();
        $servicebrand->updateServiceBrand($request,$id);
         return redirect()->back()->with("success"," Brand  Updated Successfully"); 
    }
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request,$id)
    // {
    //     $post = new Posts();
    //     $post->updatePost($request,$id);
    //     Alert::success('Success', 'Post Updated Successfully');
    //      return redirect('/user/post')->with("success"," Post Updated Successfully");

    // }
    public function adminServiceBrandShow(String $id){
        $service=servicesBrand::findOrFail($id);
        // dd($service);
        $foodMenus=FoodMenu::where('service_brand_id', $id)->get();
        $hotelRooms=HotelRoomAndHall::where('service_brand_id', $id)->get();
        // dd($foodMenus);
         return view('content.services-manager.service-show', compact('service','foodMenus','hotelRooms'));
    }

    public function adminServiceBrandFoodMenuStore(Request $request){
        $foodMenu = new FoodMenu();
        $foodMenu->store($request);
         return redirect()->back()->with("success"," Food Menu Created Successfully");
    }

    public function adminServiceBrandHotelStore(Request $request){
        $hotelRoom = new HotelRoomAndHall();
        $hotelRoom->store($request);
         return redirect()->back()->with("success"," Hotel Room/ Hall Created Successfully");
    }

    public function adminServiceBrandHotelEdit(String $id){
        $hotelRoom=HotelRoomAndHall::findOrFail($id);
        return view('content.services-manager.hotel-room-edit', compact('hotelRoom'));
    }

    public function adminServiceBrandHotelUpdate(Request $request,$id){
        $hotelRoom = new HotelRoomAndHall();
        $hotelRoom->updateHotelRoomAndHall($request,$id);
         return redirect()->back()->with("success"," Food Menu Update Successfully");
    }

    public function adminServiceBrandFoodMenuEdit(String $id){
        $food=FoodMenu::findOrFail($id);
        return view('content.services-manager.food-menu-edit', compact('food'));
    }
    
    public function adminServiceBrandFoodMenuUpdate(Request $request,$id){
        $foodMenu = new FoodMenu();
        $foodMenu->updateFoodMenu($request,$id);
         return redirect()->back()->with("success"," Food Menu Update Successfully");
    }



    public function deleteBrand($id){
        $this->destroy($id);
         return back()->with("success"," Brand  delete Successfully"); 
    }
    
    public function destroy($id)
    {
        // dd($id);
         $servicebrand=ServicesBrand::findOrFail($id);

         if (File::exists("service-brand/logo/".$servicebrand->logo)) {
             File::delete("service-brand/logo/".$servicebrand->logo);
         }
         $images=BrandGalleryImage::where("service_brand_id",$servicebrand->id)->get();
         foreach($images as $image){
         if (File::exists("service-brand/gallery/".$image->image)) {
            File::delete("service-brand/gallery/".$image->image);
        }
         }
         $servicebrand->delete();
        Alert::success('Success', 'post deleted Successfully.');
        return back();
    }
// ===========Delete banner descktop images of serveices=================
    public function servceBrandDeleteImage($id){
        // dd($id);
        $images=BrandGalleryImage::findOrFail($id);
        if (File::exists("service-brand/gallery/".$images->image)) {
           File::delete("service-brand/gallery/".$images->image);
       }

       BrandGalleryImage::find($id)->delete();
       return back();
   }

   
// ===========Delete banner from user side images of serveices=================
public function userServceBrandDeleteImage($id){
    $this->servceBrandDeleteImage($id);
   return back();
   }


// ===========Delete banner Mobile images of serveices=================

   public function servceBrandDeleteMobileImage($id){
    // dd($id);
    $images=MobileBrandGalleryImage::findOrFail($id);
    if (File::exists("service-brand/mobile-gallery/".$images->image)) {
       File::delete("service-brand/mobile-gallery/".$images->image);
   }

   MobileBrandGalleryImage::find($id)->delete();
   return back();
  } 

// ===========Delete banner Mobile from user side images of serveices=================

   public function userServceBrandDeleteMobileImage($id){
    $this->servceBrandDeleteMobileImage($id);
   return back();
   }

   public function serviceUserProfile()
   {
       // $id = Auth::id();
       $user = User::find(Auth::id());
       $afg_cities = AfgCity::get();
       return view('services-module.service-user-profile', compact('user','afg_cities'));
    }
    public function updateServiceUserProfile(Request $request,$id)
    {
        // dd($request->all());
     $user = User::findOrFail(Auth::id());
     $afg_cities = AfgCity::get()->all();
     if($request->hasFile("dp_image")){
         if (File::exists("dp_images/".$user->dp_image)) {
             File::delete("dp_images/".$user->dp_image);
         }
         $file=$request->file("dp_image");
         $user->dp_image=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/dp_images"),$user->dp_image);
         $request['dp_image']=$user->dp_image;

     }

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "whatsapp" => $request->whatsapp,
            "dp_image"=>$user->dp_image,
            "city_id" =>$request->city_id,
            "zip_code" =>$request->zip_code,
            "business" =>$request->business,
            "address" =>$request->address,
        ]);
        return view('services-module.service-user-profile',compact('user','afg_cities'))->with("success","Profile Updated Successfully");

    }
    public function deleteBrandLogo($id){

    //    dd($id);
        $logo=ServicesBrand::findOrFail($id)->logo;
        if (File::exists("service-brand/logo/".$logo)) {
        File::delete("service-brand/logo/".$logo);
        }
       return back();
    }




    public function adminServiceBrandFoodMenuImageDelete($id){
        // dd($id);
        $images=FoodMenuImage::findOrFail($id);
        if (File::exists("service-brand/food-menu-images/".$images->image)) {
           File::delete("service-brand/food-menu-images/".$images->image);
       }
 
       FoodMenuImage::find($id)->delete();
       return back();
    }


   public function adminServiceBrandFoodMenuCoverDelete($id){
    $cover=FoodMenu::findOrFail($id)->cover;
    // dd($cover);
    if (File::exists("service-brand/food-menu-cover/".$cover)) {
    File::delete("service-brand/food-menu-cover/".$cover);
    }
    return back();
    }

    public function adminServiceBrandHotelImageDelete($id){
        // dd($id);
        $images=HotelRoomAndHallImage::findOrFail($id);
        if (File::exists("service-brand/hotel-room-images/".$images->image)) {
           File::delete("service-brand/hotel-room-images/".$images->image);
       }
 
       HotelRoomAndHallImage::find($id)->delete();
       return back();
    }

    public function adminServiceBrandHotelCoverDelete($id){
        // dd($id);

        $cover=HotelRoomAndHall::findOrFail($id)->cover;
        // dd($cover);
        if (File::exists("service-brand/hotel-room-cover/".$cover)) {
        File::delete("service-brand/hotel-room-cover/".$cover);
        }
        return back();
        }
    
    

}

