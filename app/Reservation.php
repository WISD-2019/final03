<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //每個訂單都有一個所屬（belongsTo）的使用者(user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
