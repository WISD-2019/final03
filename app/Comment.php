<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //每條留言都有一個所屬（belongsTo）的使用者(user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
