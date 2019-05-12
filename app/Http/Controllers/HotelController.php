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
}
