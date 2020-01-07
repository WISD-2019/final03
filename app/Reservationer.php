<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservationer extends Model
{

    protected $table = 'reservationer';

    protected $fillable = [
        'id',
        'user_id',
        'birthday',
        'id_number',
        'gender',
        'name',
        'email',
        'password',
        'address',
        'postal_code',
        'phone',
        'type',
        'total',
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
