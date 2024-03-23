<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBrandGalleryImage extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'service_brand_id',
    ];

    public function servicesBrand(){
        return $this->belongsTo(ServicesBrand::class);
    }
}
