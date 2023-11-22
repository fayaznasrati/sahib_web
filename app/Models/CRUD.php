<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'puid',
        'status',
        'post_details',
        'title',
        'body',
        'expired_at',
        'images',
    ];

    public function postImages()
    {
      return $this->hasMany(CRUD_Image::class);
    }

    public function toggleIsActive()
     {
            $this->status = !$this->status;
            return $this;
     }


}
