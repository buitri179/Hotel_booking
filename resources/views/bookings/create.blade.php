@extends('layouts.admintemplate`x')

@section('content')
    <div class="container">
        <h1>Create New Booking</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" class="form-control" id="customer_id" name="customer_id" required>
            </div>
            <div class="form-group">
                <label for="room_id">Room ID</label>
                <input type="text" class="form-control" id="room_id" name="room_id" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="checkin_date">Check-in Date</label>
                <input type="text" class="form-control" id="checkin_date" name="checkin_date" required>
            </div>
            <div class="form-group">
                <label for="checkout_date">Check-out Date</label>
                <input type="text" class="form-control" id="checkout_date" name="checkout_date" required>
            </div>
            <div class="form-group">
                <label for="total_adults">Total Adults</label>
                <input type="text" class="form-control" id="total_adults" name="total_adults" required>
            </div>
            <div class="form-group">
                <label for="total_children">Total Children</label>
                <input type="text" class="form-control" id="total_children" name="total_children">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
