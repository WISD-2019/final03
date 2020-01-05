<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{

    protected $table = 'reservations';

    protected $fillable = [
        'id',
        'user_id',
        'checkin',
        'checkout',
        'start_day',
        'book_start',
        'book_end',
        'booking',
        'discount',
        'total',
        'need',
        'status',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
