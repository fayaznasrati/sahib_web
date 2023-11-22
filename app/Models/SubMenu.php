<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'url',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
        /*
         * Get all of the comments for the Posts
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function posts(): HasMany
        {
            return $this->hasMany(Posts::class, 'sub_menu_id', 'id');
        }
}
