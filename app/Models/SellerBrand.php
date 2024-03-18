<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'whatsapp',
        'user_id',
        'address',
        'city_id',
        'zip_code',
        'brand_certificate_img',
        'brand_certificate_no',
        'brand_found_date',
        'brand_policy',
        'status',
        'branduuid',
        'slug',
        'about',
        'brand_logo',
        'delivery_policy',
'return_policy',
'security_policy',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function afgcity()
    {
        return $this->hasMany(AfgCity::class);
    }



    public function toggleIsActive()
    {
           $this->status = !$this->status;
           return $this;
    }
  
}
