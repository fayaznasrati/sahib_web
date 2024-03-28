<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\toggleIsActive;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{

    // Create an array with id and name fields
    public $data_cat = [
    ['id' => 1, 'name' => 'home'],
    ['id' => 2, 'name' => 'factories'],
    ['id' => 3, 'name' => 'wholesalers'],
    ['id' => 4, 'name' => 'services'],
    ['id' => 5, 'name' => 'other']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner_category = [
            ['id' => 1, 'name' => 'home'],
            ['id' => 2, 'name' => 'factories'],
            ['id' => 3, 'name' => 'wholesalers'],
            ['id' => 4, 'name' => 'services'],
            ['id' => 5, 'name' => 'other']
            ];
        $banners=Banner::latest()->paginate(5);
        // dd($banner);
        return view('content.banner-manager.banner-index',compact('banners','banner_category'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('content.banner-manager.banner-create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        // dd($request->all());
        $banner = new Banner();
         $banner->store($request);
         return redirect('/admin/banner')->with("success"," banner Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $banner=Banner::findOrFail($id);
         return view('content.banner-manager.banner-show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $ban=Banner::findOrFail($id); 
        $banners=Banner::latest()->paginate(5);
        $banner_category = [
            ['id' => 1, 'name' => 'home'],
            ['id' => 2, 'name' => 'factories'],
            ['id' => 3, 'name' => 'wholesalers'],
            ['id' => 4, 'name' => 'services'],
            ['id' => 5, 'name' => 'other']
            ];
         return view('content.banner-manager.banner-index', compact('ban','banners','banner_category'));
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
        // dd($request->all());
        $banner = new Banner();
        $banner->updatebanner($request,$id);
         return redirect('/admin/banner')->with("success"," banner Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
         $banner=Banner::findOrFail($id);

         if (File::exists("cover/banner/".$banner->cover)) {
            File::delete("cover/banner/".$banner->cover);
        }
        if (File::exists("mobileCover/banner/".$banner->mobileCover)) {
            File::delete("mobileCover/banner/".$banner->mobileCover);
        }
         
         $banner->delete();
         Alert::success('Success', 'bannere deleted Successfully.');
         return redirect('/admin/banner')->with('success', 'bannere deleted Successfully.');
    }

    public function deletecover($id){
       
        $cover=Banner::findOrFail($id)->cover;
        $mobileCover=Banner::findOrFail($id)->mobileCover;

        if (File::exists("cover/banner/".$cover)) {
        File::delete("cover/banner/".$cover);
        }

        if (File::exists("mobileCover/banner/".$banner->mobileCover)) {
            File::delete("mobileCover/banner/".$banner->mobileCover);
        }

       return back();
    }


    public function adminbannerStatus(Request $request)
    {
        // dd($request->all());
        $bannerId = $request->input('bannerId');
        $banner=Banner::where('id',$bannerId)->first();
        $banner->toggleIsActive()->save();
        return response()->json(['success' => true]);
    }
}
