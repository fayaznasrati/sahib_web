<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortVideo;
use App\Models\Likes;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ShortVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = ShortVideo::withCount('likes')->get();
        return view('videos.index', compact('videos'));
    }

    public function short()
    {

        $videos = ShortVideo::all();
        return view('videos.shorts', compact('videos'));
    }

    

    public function likeVideoShort(Request $request)
    {
        // Store the like in the database
        $like = new Likes();
        $like->user_id = auth()->user()->id; // Assuming user is authenticated
        $like->short_video_id  = $request->input('video_id');
        $like->save();
        return response()->json(['message' => 'Like stored successfully']);
    }
    public function test()
    {

        // return "hi";
        $videos = ShortVideo::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */


    // public function store(Request $request)
    // {

    //     // dd($request->all());
    //     $request->validate([
    //         'filename' => 'required|mimes:mp4|max:20000', // Example validation rules
    //     ]);

    //     $video = $request->file('filename');
    //     $videoName = time().'.'.$video->extension();
    //     $video->move(public_path('short_videos'), $videoName);

    //     $user = auth()->user();
    //     $user->shortVideos()->create([
    //         'title' => $request->input('title'),
    //         'filename' => $videoName
    //     ]);

    //     return redirect()->back()->with('success', 'Short video uploaded successfully.');
    // }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'filename' => 'required|mimes:mp4|max:20000', // Example validation rules
        ]);



            if($request->hasFile("filename")){

                $file=$request->file("filename");
                $videoName=time().'_'.$file->getClientOriginalName();
                $file->move(public_path('short_videos'),$videoName);

                $expiration_date = Carbon::now()->addDays(1);
                $short =new ShortVideo([
                   "title" => $request->name,
                   "filename" =>$videoName,
                   "expired_at"=>$expiration_date,                 
                ]);
                // dd($short);
               $short->user_id = Auth::id();
               $short->save();
                // dd($short);

            }
             return redirect('/short')->with('success', 'Short video uploaded successfully.');

        }

    // // Implement other CRUD methods (index, show, edit, update, destroy) as needed

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = ShortVideo::findOrFail($id);
        $video->delete();

        return redirect()->route('videos.index');
    }
}
