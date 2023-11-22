<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use \DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Menu::all();

        return view('create-ad', ['category' => $category]);
    }

    public function getSubCategory(Request $request)
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
        //
    }

    /**
     * Store a  newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
