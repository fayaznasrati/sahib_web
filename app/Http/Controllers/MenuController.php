<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\TopMenu;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::get()->all();   
        $topMenus = TopMenu::get()->all();   
        return view('content.menus.menu',compact('menus','topMenus'));
       
    }

    public function getSubMenu(Request $request)
    {
        
        $selectedValue = $request->input('selectedValue');

        // Fetch data for the second dropdown based on the selected value
        $data = SubMenu::where('menu_id', $selectedValue)->get();

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
            $file->move(\public_path("menu-icon/"),$icon);
            $thePuuid = "icon-".time();
        }else{
            $icon = 'noimage.png';
        }
        $menu = new  Menu([
            "name" => $request->name,
            "slug" => $slug.'-'.time(),
            "url" => $request->url,
            "top_menu_id" => $request->top_menu_id,
            "icon"=>$icon
        ]);
        // dd($menu);
        $menu->save(); 
    
        $request->session()->flash('success', 'Menu created successfully');       
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
        $menu = Menu::find($id);
        $menus = Menu::get()->all(); 
        $topMenus = TopMenu::get()->all(); 
        return view('content.menus.menu',compact('menu','menus','topMenus'));
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
        $menu = Menu::find($id);
        if($request->hasFile("icon")){
            if (File::exists("menu-icon/".$menu->icon)) {
                File::delete("menu-icon/".$menu->icon);
            }
            $file=$request->file("icon");
            $menu->icon=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/menu-icon"),$menu->icon);
            $request['icon']=$menu->icon;
   
        }
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $slug = Str::slug($validatedData['name']);
        $menu->update([
            "name" => $request->name,
            "slug" => $slug.'-'.time(),
            "url" => $request->url,
            "top_menu_id" => $request->top_menu_id,
            "icon"=>$menu->icon
        ]);
      
        return redirect()->route('menus.index')
                        ->with('success','Menu updated successfully');
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
       
        $menu = Menu::findOrFail($id);
        if (File::exists("menu-icon/".$menu)) {
            File::delete("menu-icon/".$menu);
            }
        $menu->delete();
        return redirect()->route('menus.index')
          ->with('success', 'Menu deleted successfully');
    }
}
