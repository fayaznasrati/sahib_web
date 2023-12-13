<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\toggleIsActive;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::latest()->paginate(5);
        // dd($slider);
        return view('content.slider-manager.slider-index',compact('slider'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.slider-manager.slider-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $slid = new Slider();
        $slid->store($request);
         return redirect('/admin/slider')->with("success"," slid Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $slid=Slider::findOrFail($id);
         return view('content.slider-manager.slider-show', compact('slid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $slid=slider::findOrFail($id); 
        $slider=Slider::latest()->paginate(5);

         return view('content.slider-manager.slider-index', compact('slid','slider'));
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
        $slid = new Slider();
        $slid->updateSlid($request,$id);
         return redirect('/admin/slider')->with("success"," slid Updated Successfully");

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
         $slider=Slider::findOrFail($id);

         if (File::exists("cover/slider/".$slider->cover)) {
             File::delete("cover/slider/".$slider->cover);
         }
         
         $slider->delete();
         Alert::success('Success', 'Slide deleted Successfully.');
         return redirect('/admin/Slider')->with('success', 'Slide deleted Successfully.');
    }

    public function deletecover($id){
       
        $cover=Slider::findOrFail($id)->cover;
        if (File::exists("cover/slider/".$cover)) {
        File::delete("cover/slider/".$cover);
        }
       return back();
    }


    public function adminSlidStatus(Request $request)
    {
        // dd($request->all());
        $slidId = $request->input('slidId');
        $slid=Slider::where('id',$slidId)->first();
        $slid->toggleIsActive()->save();
        return response()->json(['success' => true]);
    }
}
