<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Slider extends Model
{
    use HasFactory;

    protected $fillable =  [
        'user_id',
        'slideruuid',
        'name',
        'slug',
        'url',
        'description',
        'note',
        'cover',
        'mobileCover',
        'company',
        'offer',
        'old_price',
        'new_price',
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
            'description' => 'required',
            'cover' => 'required',
            'mobileCover' => 'required',
        ]);

        $note = Str::limit(strip_tags($validatedData['description']),50);
        $slug = Str::slug($validatedData['name']);
        $originalSlug = $slug;
        $count = 1;

        while (Slider::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
            if($request->hasFile("cover") && $request->hasFile("mobileCover")){
                $file=$request->file("cover");
                $mobileFile=$request->file("mobileCover");
                $mobileCover=time().'_'.$mobileFile->getClientOriginalName();
                $cover=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("cover/slider/"),$cover);
                $mobileFile->move(\public_path("mobileCover/slider/"),$mobileCover);
                $expiration_date = Carbon::now()->addDays(30);
                $slid =new Slider([
                   "name" => $request->name,
                   "url" => $request->url,
                   "slug" => $slug.'-'.time(),
                   "description" =>$request->description,
                   "note" =>$note,
                   "cover" =>$cover,
                   "mobileCover" =>$mobileCover,
                   "slideruuid" => "slid-".time(),
                   "old_price" =>$request->old_price,
                   "new_price" =>$request->new_price,
                   "offer" =>$request->offer,
                   "expired_at"=>$expiration_date,                 
                ]);
                // dd($slid);
               $slid->user_id = Auth::id();
               $slid->save();
                // dd($slid);

            }
           return back();

        }
     
        public function updateSlid(Request $request, $id)
        {
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
            ]);
    
            $note = Str::limit(strip_tags($validatedData['description']),50);
            $slug = Str::slug($validatedData['name']);
            $originalSlug = $slug;
            $count = 1;
    
            while (Slider::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
         $slid = Slider::findOrFail($id);
         if($request->hasFile("cover")){
            if (File::exists("cover/slider/".$slid->cover)) {
                File::delete("cover/slider/".$slid->cover);
            }
            $file=$request->file("cover");
            $slid->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover/slider/"),$slid->cover);
            $request['cover']=$slid->cover;
        }
        if($request->hasFile("mobileCover")){
            if (File::exists("mobileCover/slider/".$slid->mobileCover)) {
                File::delete("mobileCover/slider/".$slid->mobileCover);
            }
            $file=$request->file("mobileCover");
            $slid->mobileCover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/mobileCover/slider/"),$slid->mobileCover);
            $request['mobileCover']=$slid->mobileCover;
        }
    
            $slid->update([
                "name" => $request->name,
                "url" => $request->url,
                "slug" => $slug.'-'.time(),
                "description" =>$request->description,
                "note" =>$note,
                "cover"=>$slid->cover,
                "mobileCover"=>$slid->mobileCover,
                "old_price" =>$request->old_price,
                "new_price" =>$request->new_price,
                "offer" =>$request->offer,             
            ]);
            return back();
        }





    }
