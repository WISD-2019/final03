<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //model a->room b->reservation c->item
    //a 要hasMany c
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
