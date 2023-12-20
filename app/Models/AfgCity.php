<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AfgCity extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function sellerBrand()
    {
        return $this->belongsTo(SellerBrand::class);
    }
}

    
