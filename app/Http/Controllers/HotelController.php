<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotel.index');
    }
    public function create()
    {
        return view('hotel.create');
    }
    public function store(Request $request)
    {

        $hotel = Hotel::create(
            [
                'name' => $request->hotel_name,
                'phone_number' => $request->hotel_phone_number,
                'address' => $request->hotel_address,
                'number_of_rooms' => $request->room_number,
                'hotel_stars' => $request->hotel_star,
                'hotel_services' => $request->hotel_services
            ]
        );

        $success = session('success', 'hotel has been created successfully');
        return view('hotel.create', compact('success'));
    }

    public function edit()
    {
        $hotel = Hotel::first()->toArray();
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request,$id)
    {
        $hotel = Hotel::findOrfail($id,
            [
                'name' => $request->hotel_name,
                'phone_number' => $request->hotel_phone_number,
                'address' => $request->hotel_address,
                'number_of_rooms' => $request->room_number,
                'hotel_stars' => $request->hotel_star,
                'hotel_services' => $request->hotel_services
            ]
        );
    }
}
