<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Image;
use App\Models\Posts;
use App\Models\AfgCity;
use App\Models\Menu;
use Carbon\Carbon;
use App\Models\SubMenu;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\toggleIsActive;
use App\Models\Posts\updatePost;
use RealRashid\SweetAlert\Facades\Alert;

class PostsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Posts::latest()->where('user_id',Auth::id())->paginate(5);
        // dd($posts);
        return view('seller-module.my-ad-list')->with('posts',$posts);

    }

    // public function posts_manager(){
    //     $posts=Posts::latest()->paginate(5);
    //     $menus = Menu::all();
    //     // dd($posts);
    //     return view('content.posts-manager.posts-index',compact('posts','menus'));  
    // }

    public function seller_posts_manager(){
        $name = 'seller';
        $posts=Posts::latest()->where('category_type',2)->paginate(10);
        $menus = Menu::all();
        return view('content.posts-manager.posts-index',compact('posts','menus','name'));  
    }

    public function factories_posts_manager(){
        $name = 'Factories';
        $posts=Posts::latest()->where('category_type',1)->paginate(10);
        $menus = Menu::all();
        return view('content.posts-manager.posts-index',compact('posts','menus','name')); 
    }

    public function adminPostStatus(Request $request)
    {
        // dd($request->all());
        $postId = $request->input('postId');
        $post=Posts::where('id',$postId)->first();
        $post->toggleIsActive()->save();
        return response()->json(['success' => true]);
    }

    public function getSubMenus(Request $request)
    { 
        $selectedValue = $request->input('selectedValue');
        // Fetch data for the second dropdown based on the selected value
        $data = SubMenu::where('menu_id', $selectedValue)->get();
        return response()->json(['success' => true, 'data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Menu::all();
        return view('seller-module.create-ad', ['category' => $category]);
    }



    public function adminPostCreate()
    {
        $menus = Menu::all();
        return view('content.posts-manager.posts-create', ['menus' => $menus]);
    }

    public function adminPostStore(Request $request){

        $post = new Posts();
        $post->store($request);
         return redirect('/admin/posts-manager')->with("success"," Post Created Successfully");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            // $$id = Posts::findOrFail($id);
            $post = new Posts();
            $post->store($request);
            Alert::success('Success', 'Post Created Successfully');
            // Alert::warning("warning", "warning capture");

             return redirect('/user/post');
    }
     
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=Posts::findOrFail($id);
        $category = Menu::all();
        $Url = url()->current();
        $currentUrl=urlencode($Url);
        $subCategory = SubMenu::all();
         return view('seller-module.show-ad', compact('posts', 'category', 'subCategory','currentUrl'));
    }

    public function adminPostshow(string $id)
    {
        $posts=Posts::findOrFail($id);
        $menus = Menu::all();
        $afgCity = AfgCity::all();
        $submenus = Submenu::all();
         return view('content.posts-manager.posts-show', compact('posts', 'menus', 'submenus','afgCity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts=Posts::findOrFail($id);
        $menus = Menu::all();
        $submenus = SubMenu::all();
         return view('seller-module.edit-post', compact('posts', 'menus', 'submenus'));
     }

     public function adminPostEdit(string $id){
        $posts=Posts::findOrFail($id);
        $menus = Menu::all();
        $subMenus = SubMenu::all();
         return view('content.posts-manager.posts-edit', compact('posts', 'menus', 'subMenus'));
    }


    public function adminPostUpdate(Request $request,$id){

        // $$id = Posts::findOrFail($id);
        // dd($request->all());
        $post = new Posts();
        $post->updatePost($request,$id);
        //  return redirect('/admin/posts-manager')->with("success"," Post Updated Successfully");
         return redirect()->back()->with("success"," Post Updated Successfully");

       
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = new Posts();
        $post->updatePost($request,$id);
        Alert::success('Success', 'Post Updated Successfully');
         return redirect('/user/post')->with("success"," Post Updated Successfully");

    }
    
    public function destroy($id)
    {
        dd($id);
         $posts=Posts::findOrFail($id);

         if (File::exists("cover/".$posts->cover)) {
             File::delete("cover/".$posts->cover);
         }
         $images=Image::where("posts_id",$posts->id)->get();
         foreach($images as $image){
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $posts->delete();
        Alert::success('Success', 'post deleted Successfully.');
         return redirect('/user/post')->with('success', 'post deleted Successfully.');
    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
       }

       Image::find($id)->delete();
       return back();
   }
    public function deletecover($id){
       
        $cover=Posts::findOrFail($id)->cover;
        if (File::exists("cover/".$cover)) {
        File::delete("cover/".$cover);
        }
       return back();
    }


}
