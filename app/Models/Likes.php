<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'short_video_id'];

    public function video()
    {
        return $this->belongsTo(ShortVideo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
