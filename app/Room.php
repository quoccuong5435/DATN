<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table ='room';
    public function hotel() {

      return $this->belongsTo(Hotel::class);

    }
    public function booking() {

        return $this->hasMany(Booking::class);


    }
}
