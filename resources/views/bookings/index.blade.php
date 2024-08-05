@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Bookings</h1>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary">Create New Booking</a>
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Room ID</th>
                <th>Phone</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Total Adults</th>
                <th>Total Children</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->customer_id }}</td>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->checkin_date }}</td>
                    <td>{{ $booking->checkout_date }}</td>
                    <td>{{ $booking->total_adults }}</td>
                    <td>{{ $booking->total_children }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
