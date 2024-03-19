<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenuImage extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'food_menu_id',
    ];

    public function foodMenu(){
        return $this->belongsTo(FoodMenu::class);
    }
}
