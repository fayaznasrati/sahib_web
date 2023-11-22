<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRUD;
use App\Models\CRUD_Image;
use App\Models\toggleIsActive;

use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class CRUDController extends Controller
{

    public function all(){
        $posts = CRUD::get()->all();   
        return view('crud.create',compact('posts'));

    }

    public function submit(Request $request){

        // dd($request->all());

        $features=json_encode($request->features);
       $data = new CRUD();
        $data->name = $request->name;
        $data->post_details =$features;
        $data->save();
        return redirect()->back();

        // dd($post);

        //   $post->post_details = json_decode($post->post_details,true);
       

    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $posts = CRUD::orderBy('id','desc')->paginate(50    );
    //     return view('crud.read', compact('posts'));
    //     // return json_encode($CRUDPost);
    // }

    public function index()
    {
        $posts = CRUD::get()->all();   
        return view('crud.make',compact('posts'));
        // $posts = CRUD::orderBy('id','desc')->paginate(50    );
        // return view('crud.make', compact('posts'));
        // return json_encode($CRUDPost);
    }

    /**How to store, edit , delete Repeater/Multiple Data into Database using PHP(Laravel) all in one |
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("CRUD.create");
    }

    /*
     * Store a newly created resource in storage.
     */

    public function store(Request $request)

    {
        
    
        // dd($allImages);

        // $title = json_encode($request->title);
        // $body = json_encode($request->body);
        // $request->validate([
        //     'name' => 'required'
        // ]);
        // dd($request->all());
        
        // $data = new CRUD();
        // $data->name = $request->name;
        // $data->post_details =$features;
        // $data->save();
        // $in = [];
        // $allImages = [];
        // $titleArry = [];
        // $bodyArry = [];
            
        // if ($request->hasFile('images')) {
        //     $images = $request->file('images');
        //     foreach ($images as $image) {
        //         $imageName = $image->getClientOriginalName();
        //         $image->storeAs('public/images', $imageName);
        //         // Save the image details to the database
        //         // Image::create([
        //         //     'image_name' => $imageName,
        //         //     'image_path' => 'public/images/' . $imageName,
        //         // ]);
        //         $allImages[] = $imageName;
        //     }
        // }

        // $postUUID = 'post-'.time();
        // $postUUID =  static::generateCustomId();
       
        $crud = new CRUD();
        $crud->name = $request->name;
        $crud->puid =  'post-'.time();
        $crud->status = 1;
        $crud->title = $titleArry = json_encode($request->title);
        $crud->body = $bodyArry = json_encode($request->body);
        $crud->save();
        if ($request->hasFile('images')) {
         $images = $request->file('images');
        foreach ($images as $imagefile) {
            $postimages = new CRUD_Image;
            $path = $imagefile->store('/post_images/resource', ['disk' =>   'my_files']);
            $postimages->url = $path;
            $postimages->c_r_u_d_id = $crud->id;
            // $postimages->post_id = $crud->id;
            $postimages->save();
          }
        }
         
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = CRUD::where('id',$id)->first(); 
        // $post->post_details = json_decode($post->post_details,true);

      

        // dd($imgs);

        // dd($post->post_details);
   
        return view('crud.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = CRUD::where('id',$id)->first(); 
        // dd($post);
        // $post->post_details = json_decode($post->post_details,true);
        return view('crud.update',compact('post'));
    }

    public function edit2(string $id)
    {
        $post = CRUD::where('id',$id)->first(); 
        // dd($post);
        // $post->post_details = json_decode($post->post_details,true);
        return view('crud.update2',compact('post'));
    }
    public function updateStatus(Request $request)
    {
        // dd($request->all());
        $postId = $request->input('postId');
        $post=CRUD::where('id',$postId)->first();
        $post->toggleIsActive()->save();
        return response()->json(['success' => true]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $crud = CRUD::find($id);
        $crud->name = $request->name;
        $crud->status = $request->status;
        $crud->title = $titleArry = json_encode($request->title);
        $crud->body = $bodyArry = json_encode($request->body);
        
        if ($request->hasFile('images')) {
            
         $images = $request->file('images');
        foreach ($images as $imagefile) {
            $postimages = CRUD_Image::find($crud->postImages());
            $destionation = '/post_images/resource'.$postimages->url;
            if(File::exists()){
                File::delete($destionation);
            }
            $path = $imagefile->store('/post_images/resource', ['disk' =>   'my_files']);
            $postimages->url = $path;
            $postimages->c_r_u_d_id = $crud->id;
            // $postimages->post_id = $crud->id;
            $postimages->update();
          }
        }
        $crud->update();
        return back();
       
        // dd($request->all());
        // $title = json_encode($request->title);
        // $body = json_encode($request->body);

        
        // $crud->fill($request->post())->save();

        //  $in = [];
        // $in['name'] = $request->name;
        // $in['title'] = $title;
        // $in['body'] = $body;

        // $data = CRUD::first();
       
        // $data->post_details =$features;
        // $data->save();
        // return redirect()->route('crud.index');
        // ->with('success', 'Post update successfully');
        // $store = CRUD::update($in);

    }

    public function update2(Request $request, CRUD $crud)
    {
       
        dd($request->all());
        // $title = json_encode($request->title);
        // $body = json_encode($request->body);

        
        $crud->fill($request->post())->save();

        //  $in = [];
        // $in['name'] = $request->name;
        // $in['title'] = $title;
        // $in['body'] = $body;

        // $data = CRUD::first();
       
        // $data->post_details =$features;
        // $data->save();
        return redirect()->route('crud.index');
        // ->with('success', 'Post update successfully');
        // $store = CRUD::update($in);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        

        $post = CRUD::findOrFail($id);
        $post->postImages()->delete();

        $post->delete();

         // Check if the image exists
  

     
        

        return redirect()->route('crud.index')
          ->with('success', 'Post deleted successfully');
    }
}
