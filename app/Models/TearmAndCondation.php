<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TearmAndCondation extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'tearm_and_condation',
        'tearm_on'
    ];

    public function tearmData()
    {
        return $data = ['register', 'wholesaler', 'retailer','company','manufacture'];
        
    }
}
