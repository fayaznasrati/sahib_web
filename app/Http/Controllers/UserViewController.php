<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\User;
use App\Models\AfgCity;
use App\Models\Posts;
use App\Models\TearmAndCondation;
use App\Models\SubMenu;
use App\Models\SellerBrand;
use App\Models\Wishlist;
class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminDashboard()
    {
        return view('content.dashboard.dashboards-analytics');
    }


    public function index()
    {
        $data = null;
        $slider = Slider::orderBy('id', 'desc')->where('status',1)->get();
        // dd($slider);
        $menus = Menu::orderBy('id', 'desc')->get();
        $mobileMenus = Menu::orderBy('id', 'desc')->take(9)->get();
        $submenus = SubMenu::All();
        $residentForRent = Posts::get()->where('menu_id',3)->where('status',1)->all();
        $residentForSell = Posts::get()->where('menu_id',4)->where('status',1)->all();
        $motors = Posts::get()->where('menu_id',5)->where('status',1)->all();
        return view('index', 
        compact(
            'data',
            'mobileMenus',
            'menus',
            'slider',
            'submenus',
            'residentForRent',
            'residentForSell',
            'motors',
            
        ));
    }

    
// ============Search post ===============
    public function searchAjax(){
        $posts= Posts::select('name')->where('status',1)->get();
        $data=[];
        foreach($posts as $post){
            $data[] = $post['name'];
        }
        return $data;

    }
// ============show Searched post ===============

    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Posts::where('name', 'LIKE', "%$query%")->get();
        // dd($data);
        return view('category-list', compact('posts'));

    }


    public function showAllSubCategoryPosts($menu, $slug){
        // dd($slug);
        
        $subMenu = SubMenu::where('slug', $slug)->firstOrFail();
        // dd($subMenu->id);

        $posts = Posts::where('sub_menu_id', $subMenu->id)->where('status',1)->get();
        return view('category-list', compact('posts'));
        // dd($posts);
    }

    public function showSinglePost($subMenu, $slug){
        // dd($id);
        $Url = url()->current();
        $currentUrl=urlencode($Url);
        $post = Posts::where('slug', $slug)->firstOrFail();
        $userx = User::get();
        $posts = Posts::get()->where('sub_menu_id', $post->sub_menu_id)->where('status',1)->take(10);
        return view('single-product', compact('userx','post','currentUrl','posts'));
        // dd($posts);
    }
    public function goBack() {
        // Your logic here
        return redirect()->back();
    }

    public function wishlistAdd(Request $request){
    // Get the authenticated user

    $productId = $request->post_id;
    $userId = auth()->user()->id;

    // Check if the product is already added to the wishlist
    $wishlistItem = Wishlist::where('user_id', $userId)
        ->where('posts_id', $productId)
        ->first();

    if ($wishlistItem) {
        return response()->json(['error' => 'Product already added to wishlist']);
    }

   

    // Add the post to the wishlist

    $wishlist = new Wishlist;
    $wishlist->user_id = auth()->user()->id;
    $wishlist->posts_id = $request->post_id;
    $wishlist->save();
    Alert::success('Success', 'product added to wishlist Successfully');

        return response()->json(['success' => true]);
    }

    public function myWishlist(){
        $wishlists = Wishlist::where('user_id',Auth::id())->get();
        return view('my-wishlist',compact('wishlists'));
    }

    public function myShoppingCart(){
        $wishlists = Wishlist::where('user_id',Auth::id())->get();
        
        return view('my-shopping-cart',compact('wishlists'));
    }

    public function removeFromWishlist(Request $request)
    {
        Wishlist::where('user_id', auth()->user()->id)
                ->where('posts_id', $request->post_id)
                ->delete();
            Alert::success('Success', 'product Removed Successfully');
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

     public function sellerDashboard()
     {
         // $id = Auth::id();
         $user = User::find(Auth::id());
         $afg_cities = AfgCity::get();
         return view('seller-module.seller-dashboard', compact('user','afg_cities'));
      }

    // public function userLogin()
    // {
    //     return view('auth.login');
    // }

    public function askToRagisterPage()
    {
        return view('auth.ask');
    }
    public function getTegisterSeller()
    {
        $tearms = TearmAndCondation::where('tearm_on', 'register')->orderBy('updated_at', 'desc')->take(1)->get();

        return view('auth.seller-register', compact('tearms'));
    }


    public function categoryList()
    {
        return view('category-list');
    }

    public function singleProduct()
    {
        return view('single-product');
    }

    

    public function sellerBrandInfo($slug)
    {
        $brand = SellerBrand::where('slug', $slug)->first();
        $posts = Posts::get();
        // dd($posts);

        return view('seller-brand-info', compact('brand','posts'));
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
