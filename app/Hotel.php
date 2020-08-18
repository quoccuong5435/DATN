<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table ='hotel';
      public function rooms() {

        return $this->hasMany(Room::class);

    }
}
