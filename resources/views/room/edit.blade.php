@extends('base_layout.master_layout')

@section('content')

<div class="col-md-12">
    <form method="POST" action="{{route('room.store')}}">
        <div class="form-group">
            <label>room number</label>
            <input class="form-control" type="number" name="room_number" value="{{room_data->room_number}}">
        </div>
        <div class="form-group">
            <label>Type</label>
            <select class="form-group" name="room_type">
                <option>single</option>
                <option>double</option>
                <option>twin</option>
                <option>cabana</option>
                <option>superior</option>
                <option>king</option>
                <option>junior suite</option>
                <option></option>
            </select>
        </div>
        <div class="form-group">
            <label>price</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="form-group">
            <label>book type</label>
            <select class=form-group name="book_type">
                <option>Daily</option>
                <option>Monthly</option>
            </select>
        </div>
        <div class="form-group">
            <label>Services</label>
            <input class="form-control" name="room_services">
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="images">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit">
            <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
        </div>
    </form>
</div>
</div>
@endsection