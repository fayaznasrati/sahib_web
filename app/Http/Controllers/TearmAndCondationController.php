<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TearmAndCondation;
class TearmAndCondationController extends Controller
{


 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tc = new TearmAndCondation();
        $tearm_on = $tc->tearmData();

        $tearms = TearmAndCondation::get();
        return view('content.tearm-and-cond.tearm', compact('tearms','tearm_on'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator  = $request->validate([
            'tearm_and_condation' => 'required',
            'tearm_on' => 'required',
        ]);
        $tearm = new  TearmAndCondation([
            "tearm_and_condation" => $request->tearm_and_condation,
            "tearm_on" => $request->tearm_on,
        ]);
        $tearm->save(); 
        $request->session()->flash('success', 'Tearms and Conadation created successfully');       
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
        $tearm = TearmAndCondation::findOrFail($id);
        return view('content.tearm-and-cond.tearm-show', compact('tearm'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tc = new TearmAndCondation();
        $tearm_on = $tc->tearmData();
        $tearm = TearmAndCondation::findOrFail($id);
        $tearms = TearmAndCondation::get(); 
        return view('content.tearm-and-cond.tearm',compact('tearm','tearms','tearm_on'));
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
        $tearm = TearmAndCondation::findOrFail($id);
    //   dd($tearm);
        $request->validate([
            'tearm_and_condation' => 'required',
            'tearm_on'=>'required',
        ]);
        $tearm->update([
            "tearm_and_condation" => $request->tearm_and_condation,
            "tearm_on" => $request->tearm_on,
        ]);
      
        return redirect()->route('tearms.index')
                        ->with('success','Tearms and Condations updated successfully');
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
       
        $tearm = TearmAndCondation::findOrFail($id);
        $tearm->delete();
        return redirect()->route('tearm.index')
          ->with('success', 'tearm and Condation deleted successfully');
    }
}
