<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    
    public function room()
    {

        return $this->belongsTo(Room::class);

    }
    public function hotel()
    {

        return $this->belongsTo(Hotel::class);

    }
}
