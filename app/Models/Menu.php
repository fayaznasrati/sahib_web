<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'icon',
        'name',
        'slug',
        'url',
        'top_menu_id',
    ];

    public function submenu()
    {
        return $this->hasMany(SubMenu::class);
    }
    
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    /**
     * Get the  that owns the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topMenu()
    {
        return $this->belongsTo(topMenu::class);
    }
}
