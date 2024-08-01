@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Booking Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $booking->id }}</td>
            </tr>
            <tr>
                <th>Customer ID</th>
                <td>{{ $booking->customer_id }}</td>
            </tr>
            <tr>
                <th>Room ID</th>
                <td>{{ $booking->room_id }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $booking->phone }}</td>
            </tr>
            <tr>
                <th>Check-in Date</th>
                <td>{{ $booking->checkin_date }}</td>
            </tr>
            <tr>
                <th>Check-out Date</th>
                <td>{{ $booking->checkout_date }}</td>
            </tr>
            <tr>
                <th>Total Adults</th>
                <td>{{ $booking->total_adults }}</td>
            </tr>
            <tr>
                <th>Total Children</th>
                <td>{{ $booking->total_children }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $booking->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $booking->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('bookings.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
