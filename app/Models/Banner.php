<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Banner extends Model

{
    use HasFactory;

    protected $fillable =  [
        'user_id',
        'name',
        'url',
        'slug',
        'cover',
        'mobileCover',
        'banneruuid',
        'expired_at',
    ];

    public function toggleIsActive()
    {
           $this->status = !$this->status;
           return $this;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

 


    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'url' => 'required',
            'cover' => 'required',
            'mobileCover' => 'required',
        ]);

        $slug = Str::slug($validatedData['name']);
        $originalSlug = $slug;
        $count = 1;

        while (Banner::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
            if($request->hasFile("cover") && $request->hasFile("mobileCover")){
                $file=$request->file("cover");
                $mobileFile=$request->file("mobileCover");
                $mobileCover=time().'_'.$mobileFile->getClientOriginalName();
                $cover=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("cover/banner/"),$cover);
                $mobileFile->move(\public_path("mobileCover/banner/"),$mobileCover);
                $expiration_date = Carbon::now()->addDays(30);
                $banner =new Banner([
                   "name" => $request->name,
                   "url" => $request->url,
                   "slug" => $slug.'-'.time(),
                   "cover" =>$cover,
                   "mobileCover" =>$mobileCover,
                   "banneruuid" => "banner-".time(),
                   "expired_at"=>$expiration_date,                 
                ]);
                // dd($banner);
               $banner->user_id = Auth::id();
               $banner->save();
                // dd($banner);

            }
           return back();

        }
     
        public function updatebanner(Request $request, $id)
        {
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => 'required|max:255',
            ]);
    
            $slug = Str::slug($validatedData['name']);
            $originalSlug = $slug;
            $count = 1;
    
            while (Banner::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
         $banner = Banner::findOrFail($id);
         if($request->hasFile("cover")){
            if (File::exists("cover/banner/".$banner->cover)) {
                File::delete("cover/banner/".$banner->cover);
            }
            $file=$request->file("cover");
            $banner->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover/banner/"),$banner->cover);
            $request['cover']=$banner->cover;
           }
         if($request->hasFile("mobileCover")){
            if (File::exists("mobileCover/banner/".$banner->mobileCover)) {
                File::delete("mobileCover/banner/".$banner->mobileCover);
            }
            $file=$request->file("mobileCover");
            $banner->mobileCover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/mobileCover/banner/"),$banner->mobileCover);
            $request['mobileCover']=$banner->mobileCover;
          }
            $expiration_date = Carbon::now()->addDays(30);
            $banner->update([
                "name" => $request->name,
                "url" => $request->url,
                "slug" => $slug.'-'.time(),
                "cover"=>$banner->cover,
                "mobileCover"=>$banner->mobileCover,   
                "expired_at"=>$expiration_date,         
            ]);
            return back();
        }





    }
