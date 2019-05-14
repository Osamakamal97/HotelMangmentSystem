<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\User;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){

        return view('hotel.index');
    }

    public function create(){
        return view('hotel.create');
    }

    public function store(Request $request){
        
        $hotel = Hotel::create([
            'name' => $request->hotel_name,
            'phone_number' => $request->hotel_phone_number,
            'address' => $request->hotel_address,
            'number_of_rooms' => $request->room_number,
            'number_of_employees' => $request->employee_number,
            'number_of_customers' => $request->customer_number,
            'hotel_stars' => $request->hotel_star,
            'hotel_services' => $request->hotel_services
        ]
        );
      
    }
}
