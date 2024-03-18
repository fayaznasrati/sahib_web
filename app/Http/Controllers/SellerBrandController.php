<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\AfgCity;
use App\Models\SellerBrand;

class SellerBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function brandDashboard()
    {
    $user = User::find(Auth::id());
    $brand = SellerBrand::where('user_id', Auth::id())->latest()->first();
    $afg_cities = AfgCity::get();
    // dd($brand);
    return view('seller-module.brand-dashboard', compact('user','afg_cities','brand'));
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

    public function createBrand(Request $request)
    {
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => 'required|max:255',
            ]);
    
            // $note = Str::limit(strip_tags($validatedData['description']),50);
            $slug = Str::slug($validatedData['name']);
    
            if($request->hasFile("brand_logo")){
                $file=$request->file("brand_logo");
                $brand_logo=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("brand_logo/"),$brand_logo);
            }
            if($request->hasFile("brand_certificate_img")){
                $file=$request->file("brand_certificate_img");
                $brand_certificate_img=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("brand_certificate_img/"),$brand_certificate_img);
            }
                   $theBranduuid = "brand-".time();
                    $brand =new SellerBrand([
                       "name" => $request->name,
                       "slug" => $slug.'-'.time(),
                       "brand_logo" =>$brand_logo,
                       "brand_certificate_img" =>$brand_certificate_img,
                       "branduuid" => $theBranduuid,
                       "mobile" => $request->mobile,
                       "whatsapp" => $request->whatsapp,
                       "email" => $request->email,
                       "address" => $request->address,
                       "city_id" => $request->city_id,
                       "zip_code" => $request->zip_code,
                       "brand_certificate_no" => $request->brand_certificate_no,
                       "brand_found_date" => $request->brand_found_date,
                       "brand_policy" => $request->brand_policy,
                       "delivery_policy" => $request->delivery_policy,
                       "return_policy" => $request->return_policy,
                       "security_policy" => $request->security_policy,
                       "about" => $request->about,
                    ]);
                   
                   $brand->user_id = Auth::id();
                   $brand->save();
            
    
              return redirect()->back()->with('success', 'Brand  Created Successfully.');
            // return back();
    
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
    public function updateBrand(Request $request, $id)
    {
                // dd($request->all());
                $validatedData = $request->validate([
                    'name' => 'required|max:255',
                ]);
        
             $slug = Str::slug($validatedData['name']);

             $brand = SellerBrand::findOrFail($id);

             if($request->hasFile("brand_logo")){
                if (File::exists("brand_logo/".$brand->brand_logo)) {
                    File::delete("brand_logo/".$brand->brand_logo);
                }
                $file=$request->file("brand_logo");
                $brand->brand_logo=time()."_".$file->getClientOriginalName();
                $file->move(\public_path("/brand_logo"),$brand->brand_logo);
                $request['brand_logo']=$brand->brand_logo;
       
            }
            if($request->hasFile("brand_certificate_img")){
                if (File::exists("brand_certificate_img/".$brand->brand_certificate_img)) {
                    File::delete("brand_certificate_img/".$brand->brand_certificate_img);
                }
                $file=$request->file("brand_certificate_img");
                $brand->brand_certificate_img=time()."_".$file->getClientOriginalName();
                $file->move(\public_path("/brand_certificate_img"),$brand->brand_certificate_img);
                $request['brand_certificate_img']=$brand->brand_certificate_img;
       
            }

                $brand->update([
                    "name" => $request->name,
                    "slug" => $slug.'-'.time(),
                    "brand_logo" =>$brand->brand_logo, 
                    "brand_certificate_img" =>$brand->brand_certificate_img,
                    "mobile" => $request->mobile,
                    "whatsapp" => $request->whatsapp,
                    "email" => $request->email,
                    "address" => $request->address,
                    "city_id" => $request->city_id,
                    "zip_code" => $request->zip_code,
                    "brand_certificate_no" => $request->brand_certificate_no,
                    "brand_found_date" => $request->brand_found_date,
                    "brand_policy" => $request->brand_policy,
                    "delivery_policy" => $request->delivery_policy,
                    "return_policy" => $request->return_policy,
                    "security_policy" => $request->security_policy,
                    "about" => $request->about,
                     
                ]);
        
                return redirect()->back()->with('success', 'Brand Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $validatedData = $request->validate([
            'delete_confirm' => 'required|accepted',
            // other validation rules for additional fields
        ]);

        $brand=SellerBrand::findOrFail($id);

        if (File::exists("brand_logo/".$brand->brand_logo)) {
            File::delete("brand_logo/".$brand->brand_logo);
        }
        if (File::exists("brand_certificate_img/".$brand->brand_certificate_img)) {
            File::delete("brand_certificate_img/".$brand->brand_certificate_img);
        }
        $brand->delete();
        return redirect()->back()->with('success', 'Brand Deleted.');
    
    }
}
