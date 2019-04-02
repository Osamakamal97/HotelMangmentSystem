<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table ='reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['customer_name','customer_phone_number','number_of_people','room_id',
        'book_days','book_date','want_services'];
    public $timestamps = ['created_at','updated_at'];
}
