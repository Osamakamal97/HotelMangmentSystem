<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table ='hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['name','hotel_stars','phone_number','address','number_of_rooms',
        'number_of_employees','number_of_customers','hotel_services'];
    public $timestamps = ['created_at','updated_at'];
}
