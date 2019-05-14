<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
<<<<<<< HEAD
    protected $table ='employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name','phone_number','DoB','address','salary',
        'is_married','work_hours','from','to','work_days','work_area'];



=======
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'phone_number', 'DoB', 'address', 'salary',
        'is_married', 'work_hours', 'from', 'to', 'work_days', 'work_area'];

    public function hotel()
    {
        return $this->belongsto('App/Hotel', 'hotel_id', 'id');
    }
>>>>>>> develop
}
