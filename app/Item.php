<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //model a->room b->reservation c->item
    //c 要belongsTo a
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    //c 也要belongsTo b
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
