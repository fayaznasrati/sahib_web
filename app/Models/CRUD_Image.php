<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD_Image extends Model
{
    use HasFactory;
    protected $table = 'crud_images';
    protected $fillable = [
     'url',
     'c_r_u_d_id'
    ];

    public function crud()
    {
        return $this->belongsTo(CRUD::class);
    }
}
