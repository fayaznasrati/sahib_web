<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\TopMenu;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class TopMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topMenus = TopMenu::get()->all();   
        return view('content.menus.top-menu',compact('topMenus'));
       
    }

    public function getSubtopMenu(Request $request)
    {
        
        $selectedValue = $request->input('selectedValue');

        // Fetch data for the second dropdown based on the selected value
        $data = SubMenu::where('topMenu_id', $selectedValue)->get();

        return response()->json(['success' => true, 'data' => $data]);
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
        $validatedData = $request->validate([
            'name' => 'required',
            
            
        ]);

        // dd($request->all());
        $slug = Str::slug($validatedData['name']);

        // dd($slug);
        if($request->hasFile("icon")){
            $file=$request->file("icon");
            $icon=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("topMenu-icon/"),$icon);
            $thePuuid = "icon-".time();
        }else{
            $icon = 'noimage.png';
        }
        $topMenu = new  TopMenu([
            "name" => $request->name,
            "slug" => $slug.'-'.time(),
            "url" => $request->url,
            "icon"=>$icon
        ]);
        // dd($topMenu);
        $topMenu->save(); 
    
        $request->session()->flash('success', 'topMenu created successfully');       
        return redirect()->back();
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
        $topMenu = TopMenu::find($id);
        $topMenus = TopMenu::get()->all(); 
        return view('content.menus.top-menu',compact('topMenu','topMenus'));
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
        $topMenu = TopMenu::find($id);
        if($request->hasFile("icon")){
            if (File::exists("topMenu-icon/".$topMenu->icon)) {
                File::delete("topMenu-icon/".$topMenu->icon);
            }
            $file=$request->file("icon");
            $topMenu->icon=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/topMenu-icon"),$topMenu->icon);
            $request['icon']=$topMenu->icon;
   
        }
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $slug = Str::slug($validatedData['name']);
        $topMenu->update([
            "name" => $request->name,
            "slug" => $slug.'-'.time(),
            "url" => $request->url,
            "icon"=>$topMenu->icon
        ]);
      
        return redirect()->route('topMenus.index')
                        ->with('success','topMenu updated successfully');
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
       
        $topMenu = TopMenu::findOrFail($id);
        if (File::exists("topMenu-icon/".$topMenu)) {
            File::delete("topMenu-icon/".$topMenu);
            }
        $topMenu->delete();
        return redirect()->route('topMenus.index')
          ->with('success', 'topMenu deleted successfully');
    }
}
