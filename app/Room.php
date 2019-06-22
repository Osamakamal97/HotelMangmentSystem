<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = ['room_number', 'type', 'price', 'book_type', 'is_booked', 'image'];
    public $timestamps = ['created_at', 'updated_at'];

    public function hotel()
    {
        return $this->hasMany('App\Hotel', 'hotel_id', 'id');
    }
}
