<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Exception;
use Mail;
use App\Mail\SendCodeMail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
        'role',
        'email',
        'mobile',
        'whatsapp',
        'password',
        'address',
        'city_id',
        'zip_code',
        'business',
        'dp_image',
        'otp_token',
        'is_activated',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        /**
     * Write code on Method
     *
     * @return response()
     */
    // public function generateCode()
    // {
    //     $code = rand(1000, 9999);
  
    //     UserCode::updateOrCreate(
    //         [ 'user_id' => auth()->user()->id ],
    //         [ 'code' => $code ]
    //     );
    
    //     try {
  
    //         $details = [
    //             'title' => 'Mail from Sahib.af',
    //             'code' => $code
    //         ];
             
    //         Mail::to(auth()->user()->email)->send(new SendCodeMail($details));
    
    //     } catch (Exception $e) {
    //         info("Error: ". $e->getMessage());
    //     }
    // }
    public function isAdmin()
    {
        return $this->role === '1';
    }

    public function isActivated()
    {
        return $this->is_activated === 1;
    }

    public function isActiveStatus()
    {
        return $this->status === 1;
    }

    public function isSeller()
    {
        return $this->role === '2';
    }

    public function isBuyer()
    {
        return $this->role === '0';
    }

    /**
     * Get all of the posts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class);
    }

    public function seller_brand()
    {
        return $this->hasOne(SellerBrand::class);
        // return $this->hasOne(SellerBrand::class, 'user_id', 'id');
    }
    public function brand()
    {
        return $this->hasOne(SellerBrand::class);
    }

    public function sliders(): HasMany
    {
        return $this->hasMany(Slider::class);
    }
    

    public function afgcity()
    {
        return $this->belongsTo(AfgCity::class);
    }

        // User.php
    public function wishlist()
    {
        return $this->belongsToMany(Posts::class, 'wishlists');
    }

    public function toggleIsActive()
    {
           $this->status = !$this->status;
           return $this;
    }
}
