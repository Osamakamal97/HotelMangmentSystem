<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'hotel_stars', 'phone_number', 'address', 'number_of_rooms',
        'number_of_employees', 'number_of_customers', 'hotel_services'];
    public $timestamps = ['created_at', 'updated_at'];


    public function room()
    {
        return $this->hasMany('App\Room', 'room_id', 'id');
    }

    public function employee()
    {
        return $this->hasMany('App\Employee', 'employee_id', 'id');
    }

    public function reservation()
    {
        return $this->hasMany('App\Reservation', 'reservation_id', 'id');
    }
}
