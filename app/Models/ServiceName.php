<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceName extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name'
    ];

    public function serviceBrands()
    {
        return $this->hasMany(ServicesBrand::class);
    }
}
