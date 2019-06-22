<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
        return view('room.index');
    }

    public function create()
    {
        return view('room.create');
    }

    public function store(Request $request)
    {
        $room = Room::create(
            [
                'room_number' => $request->room_number,
                'type' => $request->room_type,
                'price' => $request->price,
                'book_type' => $request->book_type,
                'is_booked' => false,
                'services' => $request->room_services,
                'image' => 'images'
            ]->validate([
                'room_number' => 'required|min:1|max:3',
                'room_type' => 'required',
                'price' => 'required',
                'book_type' => 'required',
                'is_booked' => 'required',
                'room_services' => 'required'
            ])
        );

        $success = session('success', 'Room has created successfully');
        return view('room.create', compact('success'));
    }


    public function imageEdit(Request $request)
    {
        $image = $request->image;
    }

    public function edit()
    {
        return view('room.edit');
    }

    public function update(Request $request)
    {
        $room = Room::all();
    }

    public function rules()
    {
        $rule = [
            'room_number' => 'required|min:1|max:3',
            'room_type' => 'required',
            'price' => 'required',
            'book_type' => 'required',
            'is_booked' => 'required',
            'room_services' => 'required',
            'image' => 'required'
        ];
    }
    public function messages()
    {
        $msg = [
            'room_number' => 'room number is required',
            'room_type' => ''
        ];
    }
}
