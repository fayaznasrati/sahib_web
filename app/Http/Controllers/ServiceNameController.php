<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceName;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class ServiceNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ServiceName::get()->all();
  
        return view('content.services.service',compact('services'));
    }


    public function store(Request $request)
    {
                // dd($request->all()); 
        $validatedData = $request->validate([
            'service_name' => 'required',
            
            
        ]);

        $services = new  serviceName([
            "service_name" => $request->service_name,
        ]);
        $services->save(); 
    
        $request->session()->flash('success', 'services created successfully');       
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
        $service = serviceName::find($id);
        // dd($service);
        $services = serviceName::get()->all(); 
        return view('content.services.service',compact('service','services'));
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
        $service = serviceName::find($id);
      
        $validatedData = $request->validate([
            'service_name' => 'required',
        ]);

        $service->update([
            "service_name" => $request->service_name,
        ]);
        // dd($service);
      
        return redirect()->route('services.index')
                        ->with('success','service updated successfully');
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
       
        $service = serviceName::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')
          ->with('success', 'Service deleted successfully');
    }
}