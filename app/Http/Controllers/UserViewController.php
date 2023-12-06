<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Menu;
use App\Models\User;
use App\Models\AfgCity;
use App\Models\Posts;
use App\Models\SubMenu;
use App\Models\Wishlist;
class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id', 'desc')->take(9)->get();
        $submenus = SubMenu::All();
        $residentForRent = Posts::get()->where('menu_id',3)->all();
        $residentForSell = Posts::get()->where('menu_id',4)->all();
        $motors = Posts::get()->where('menu_id',5)->all();
        return view('index', 
        compact(
            'menus',
            'submenus',
            'residentForRent',
            'residentForSell',
            'motors'
        ));
    }

    public function showAllSubCategoryPosts($id){
        // dd($id);
        $posts = Posts::where('sub_menu_id', $id)->get();
        return view('category-list', compact('posts'));
        // dd($posts);
    }

    public function showSinglePost($id){
        // dd($id);
        $Url = url()->current();
        $currentUrl=urlencode($Url);
        $post = Posts::findOrFail($id);
        $posts = Posts::get()->where('sub_menu_id', $post->sub_menu_id)->take(10);
        return view('single-product', compact('post','currentUrl','posts'));
        // dd($posts);
    }
    public function goBack() {
        // Your logic here
        return redirect()->back();
    }

    public function wishlistAdd(Request $request){
    // Get the authenticated user
    //   $user = Auth::user();
    // // Check if the post is already in the wishlist
    // if ($user->wishlist()->where('posts_id', $request->post_id)->exists()) {
    //     // return redirect()->back()->with("error"," post is already in the wishlist");
    // //    return response()->json(['error' => 'post is already added to wish list ']);
    //     return response()->json(['error' => 'Product already added to wishlist']);
    // }
    $productId = $request->post_id;
    $userId = auth()->user()->id;

    // Check if the product is already added to the wishlist
    $wishlistItem = Wishlist::where('user_id', $userId)
        ->where('posts_id', $productId)
        ->first();

    if ($wishlistItem) {
        return response()->json(['error' => 'Product already added to wishlist']);
    }

    // // // // Add the post to the wishlist
    // // $user->wishlist()->attach($post);
    $wishlist = new Wishlist;
    $wishlist->user_id = auth()->user()->id;
    $wishlist->posts_id = $request->post_id;
    $wishlist->save();

    // // return response()->json(['message' => 'Post added to wishlist'], 200);
    // return redirect()->back()->with("success"," post is added in the wishlist");

    
        // $wishlist = new Wishlist;
        // $wishlist->user_id = auth()->user()->id;
        // $wishlist->posts_id = $request->post_id;
        // $wishlist->save();

        return response()->json(['success' => true]);
    }

    public function removeFromWishlist(Request $request)
    {
        Wishlist::where('user_id', auth()->user()->id)
                ->where('posts_id', $request->post_id)
                ->delete();

        return response()->json(['success' => true]);
    }

    
   public function userDashboard()
    {
        // $id = Auth::id();
        $user = User::find(Auth::id());
        $afg_cities = AfgCity::get();
        // dd();

        return view('user-module.user-dashboard', compact('user','afg_cities'));
     }

    // public function userLogin()
    // {
    //     return view('auth.login');
    // }

    // public function userRegister()
    // {
    //     return view('auth.register');
    // }

    public function categoryList()
    {
        return view('category-list');
    }

    public function singleProduct()
    {
        return view('single-product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
    public function updateMyProfile(Request $request,$id)
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
        return view('user-module.user-dashboard',compact('user','afg_cities'))->with("success","Profile Updated Successfully");

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteMyAccount(request $request, $id)

    {
        $validatedData = $request->validate([
            'delete_confirm' => 'required|accepted',
            // other validation rules for additional fields
        ]);

        $user=User::findOrFail($id);

        if (File::exists("dp_images/".$user->dp_image)) {
            File::delete("dp_images/".$user->dp_image);
        }
        $user->delete();
        // notify()->error('Welcome to Laravel Notify ⚡️');
        return redirect('/')->with('success', 'Your Account Deleted.');
        // return redirect('/')->notify()->success('Welcome to Laravel Notify ⚡️');
    }


    
}
