<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Posts;
use App\Models\SellerBrand;
use App\Models\AfgCity;
class UserManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersManager(){
        $users = User::all();

        return view('content.users-manager.users-index',compact('users'));  
    }
    public function userBrandInfo($slug){
        // dd($slug);
        $brand = SellerBrand::where('slug', $slug)->first();
        // $posts = Posts::get();
        return view('content.users-manager.user-brand-info', compact('brand'));

    }
    public function filterUsersManager(Request $request){

        // $varstartDate ="2023-01-01"; 
        // $varendDate = now()->format('Y-m-d'); 

        $userid = $request->input('id');
        $status = $request->input('status');

        if($request->has('start_date')){
            $startDate = $request->input('start_date');
        }else{
            $startDate ="2023-01-01";
        }
        if($request->has('end_date')){
            $endDate = $request->input('end_date');
        }else{
            $endDate = now()->format('Y-m-d');
        }
        
        $users = User::orWhere('id',$userid)
        ->whereDate('created_at', '>=', $startDate==null?"2023-01-01":$startDate )
        ->whereDate('created_at', '<=', $endDate==null? now()->format('Y-m-d') :$endDate )
        ->orWhere('status', $status)
        ->orderBy('id','DESC')
        ->get();

        $posts=Posts::get()->all();
        return view('content.users-manager.users-index',compact('posts','users','startDate','endDate'));  
    }
    public function userShow(string $id)
    {
        // dd($id);
        $users=User::findOrFail($id);
        $posts=Posts::where("user_id",$id)->get();
         return view('content.users-manager.user-show', compact( 'users','posts'));
    }
    
    
    public function adminUserStatus(Request $request)
    {
        $userId = $request->input('id');
        $user=User::where('id',$userId)->first();
        $user->toggleIsActive()->save();
        return response()->json(['success' => true])->with('success',"status Updated");
    }


    public function userEdit( $id)
    {
        $user=User::findOrFail($id);
        $afgCity=AfgCity::get()->all();
        return view('content.users-manager.user-edit', compact( 'user','afgCity'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function updateUserProfile(Request $request,$id)
     {
         // dd($request->all());
      $user = User::findOrFail($id);
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
         return back()->with("success","User Profile Updated Successfully");
 
     }

 
     public function deleteUserAccount(request $request, $id)
     {


         $validatedData = $request->validate([
             'delete_confirm' => 'required|accepted',
             // other validation rules for additional fields
         ]);
        //  dd($request->all());
 
         $user=User::findOrFail($id);
 
         if (File::exists("dp_images/".$user->dp_image)) {
             File::delete("dp_images/".$user->dp_image);
         }
         $user->delete();
         // notify()->error('Welcome to Laravel Notify ⚡️');
         return redirect('/admin/users-manager')->with('success', 'Your Account Deleted.');
         // return redirect('/')->notify()->success('Welcome to Laravel Notify ⚡️');
     }
}
