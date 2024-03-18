<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SubmenuController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::get()->all();   
        $submenus = SubMenu::paginate(20);   
        return view('content.menus.sub-menu',compact('menus','submenus'));
       
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
      $validatedData =  $request->validate([
            'name' => 'required',
            'icon' => 'required',

            
        ]);
        if($request->hasFile("icon")){
            $file=$request->file("icon");
            $icon=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("submenu-icon/"),$icon);
            $thePuuid = "icon-".time();
        }else{
            $icon = 'noimage.png';
        }

        $slug = Str::slug($validatedData['name']);
        $menu = new SubMenu();
        $menu->name = $request->name;
        $menu->cover = $icon;
        $menu->slug = $slug.'-'.time();
        $menu->url = $request->url;
        $menu->menu_id = $request->menu_id;
        $menu->save(); 
        $request->session()->flash('success', 'Post created successfully');       
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
        $submenu = SubMenu::find($id); 
        $submenus = SubMenu::paginate(20); 
        // dd($submenu);
        return view('content.menus.sub-menu',compact('menu','menus','submenu','submenus'));
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
       
        $submenu = SubMenu::find($id);
  
        if($request->hasFile("icon")){
            if (File::exists("submenu-icon/".$submenu->cover)) {
                File::delete("submenu-icon/".$submenu->cover);
            }
            $file=$request->file("icon");
            $submenu->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/submenu-icon"),$submenu->cover);
            $request['icon']=$submenu->cover;
   
        }
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        
        $slug = Str::slug($validatedData['name']);
        $submenu->update([
            "name" => $request->name,
            "cover"=>$submenu->cover,
            "slug" => $slug.'-'.time(),
            "url" => $request->url,
            "menu_id" => $request->menu_id,
        ]);
     
        return redirect()->route('submenus.index')
                        ->with('success','SubMenu updated successfully');
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
        $submenu = SubMenu::findOrFail($id);
        File::delete("submenu-icon/".$submenu->cover);
        $submenu->delete();
        return redirect()->route('submenus.index')
          ->with('success', 'Post deleted successfully');
    }
}
