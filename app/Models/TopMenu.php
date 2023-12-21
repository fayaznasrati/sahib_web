<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name',
        'slug',
        'url',
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
    
}
