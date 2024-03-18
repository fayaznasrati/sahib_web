<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Models\BrandGalleryImage;
use App\Models\ServicesBrand;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\toggleIsActive;
use App\Models\Posts\updatePost;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ServiceName;

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

    // public function services_manager(){
        public function services_manager(){
        $services=ServicesBrand::latest()->paginate(5);
        $services_name = ServiceName::get()->all();
        $users = User::get()->all();

        return view('content.services-manager.service-index',compact('services','services_name','users'));  
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

    public function adminPostshow(string $id){

        $posts=Posts::findOrFail($id);
        $menus = Menu::all();
        $afgCity = AfgCity::all();
        $submenus = Submenu::all();
         return view('content.posts-manager.posts-show', compact('posts', 'menus', 'submenus','afgCity'));
    }

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
        // dd($serv);
        $users = User::all();
        $services_name = ServiceName::get()->all();
         return view('content.services-manager.service-index', compact('serv', 'users', 'services_name','services'));
    }


    public function adminServiceBrandUpdate(Request $request,$id){

        $servicebrand = new ServicesBrand();
        $servicebrand->updateServiceBrand($request,$id);
         return redirect('/admin/services-brand')->with("success"," Brand  Updated Successfully"); 

       
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
    public function adminServiceBrandShow($id){
      dd($id);
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

    public function servceBrandDeleteImage($id){
        // dd($id);
        $images=BrandGalleryImage::findOrFail($id);
        if (File::exists("service-brand/gallery/".$images->image)) {
           File::delete("service-brand/gallery/".$images->image);
       }

       BrandGalleryImage::find($id)->delete();
       return back();
   }

    public function deleteBrandLogo($id){

    //    dd($id);
        $logo=ServicesBrand::findOrFail($id)->logo;
        // dd($logo);
        if (File::exists("service-brand/logo/".$logo)) {
        File::delete("service-brand/logo/".$logo);
        }
       return back();
    }


}

