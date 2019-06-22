@extends('base_layout.master_layout')

@section('content')
<div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('hotel.update')}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label>Hotel name:</label>
                <input type="text" class="form-control" name="hotel_name" value="{{$hotel['name']}}">
            </div>
            <div class="form-group">
                <label>Hotel phone number:</label>
                <input type="text" class="form-control" name="hotel_phone_number" value="{{$hotel['phone_number']}}">
            </div>
            <div class="form-group">
                <label>Hotel Address:</label>
                <input type="text" class="form-control" name="hotel_address" value="{{$hotel['address']}}">
            </div>
            <div class="form-group">
                <label>Room number:</label>
                <input type="number" class="form-control" name="room_number" value="{{$hotel['number_of_rooms']}}">
            </div>
            <div class="form-group">
                <label>Stars number:</label>
                <input type="text" class="form-control" name="hotel_star" value="{{$hotel['hotel_stars']}}">
            </div>
            <div class="form-group">
                <label>Services :</label>
                <input type="text" class="form-control" name="hotel_services" value="{{$hotel['hotel_services']}}">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </div>
</div>

@endsection