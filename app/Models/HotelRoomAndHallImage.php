<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoomAndHallImage extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'hotel_room_and_hall_id',
    ];

    public function hotelRoomAndHall(){
        return $this->belongsTo(HotelRoomAndHall::class);
    }
}
