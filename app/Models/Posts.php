<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'user_id',
        'sub_menu_id',
        'name',
        'cover',
        'puuid',
        'colors',
        'old_price',
        'new_price',
        'title',
        'title_desc',
        'description',
        'expired_at',
    ];

    public function category()
    {
        return $this->belongsTo(Menu::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubMenu::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

      public function subMenu()
      {
          return $this->belongsTo(SubMenu::class);
      }

      public function user()
      {
          return $this->belongsTo(User::class);
      }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public function toggleIsActive()
    {
           $this->status = !$this->status;
           return $this;
    }
      /**
     * Update the specified resource in storage.
     */
    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
     $post = Posts::findOrFail($id);
     if($request->hasFile("cover")){
         if (File::exists("cover/".$post->cover)) {
             File::delete("cover/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$post->cover);
         $request['cover']=$post->cover;

     }

        $post->update([
            "menu_id" => $request->category_id,
            "sub_menu_id" => $request->sub_category_id,
            "name" => $request->name,
            "cover"=>$post->cover,
            "colors" => $colors = json_encode($request->colors),
            "old_price" =>$request->old_price,
            "new_price" =>$request->new_price,
            "title" => $title = json_encode($request->title),
            "title_desc" => $title_desc = json_encode($request->title_desc),
             "description" =>$request->description,
             
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            // dd($id);
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["posts_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                Image::create($request->all());
            }
        }
        return back();

    }
    public function store(Request $request)
    {
        // dd($request->all());
            if($request->hasFile("cover")){
                $file=$request->file("cover");
                $cover=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("cover/"),$cover);
                $thePuuid = "post-".time();
                // dd($thePuuid);
                $expiration_date = Carbon::now()->addDays(30);
                $posts =new Posts([
                  
                   "menu_id" => $request->category_id,
                   "sub_menu_id" => $request->sub_category_id,
                   "name" => $request->name,
                   "cover" =>$cover,
                   "puuid" => "post-".time(),
                   "colors" => $colors = json_encode($request->colors),
                   "old_price" =>$request->old_price,
                   "new_price" =>$request->new_price,
                   "title" => $title = json_encode($request->title),
                   "title_desc" => $title_desc = json_encode($request->title_desc),
                    "description" =>$request->description,
                    "expired_at"=>$expiration_date,                 
                ]);
                // dd($posts);
               $posts->user_id = Auth::id();
               $posts->save();
            }
    
                if($request->hasFile("images")){
                    $files=$request->file("images");
                    foreach($files as $file){
                        $imageName=time().'_'.$file->getClientOriginalName();
                        $request['posts_id']=$posts->id;
                        $request['image']=$imageName;
                        $file->move(\public_path("/images"),$imageName);
                        Image::create($request->all());
    
                    }
                }
        //   return redirect('/user/post')->with('success', 'Todos Has Been Created Successfully.');
        return back();

        }
     
   

}
