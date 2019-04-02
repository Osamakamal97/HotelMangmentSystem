<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table ='rooms';
    protected $primaryKey = 'id';
    protected $fillable = ['room_number','floor','type','price','book_type',
        'size','is_booked','room_services'];
    public $timestamps = ['created_at','updated_at'];










}
