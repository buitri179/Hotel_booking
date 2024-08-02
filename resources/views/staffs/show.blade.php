@extends('demo')

@section('content')
    <div class="container">
        <h1>Staff Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $staff->id }}</td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td>{{ $staff->full_name }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{ $staff->department->title }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><img src="{{ asset('storage/' . $staff->photo) }}" alt="Photo" width="100"></td>
            </tr>
            <tr>
                <th>Bio</th>
                <td>{{ $staff->bio }}</td>
            </tr>
            <tr>
                <th>Salary Type</th>
                <td>{{ $staff->salary_type }}</td>
            </tr>
            <tr>
                <th>Salary Amount</th>
                <td>{{ $staff->salary_amount }}</td>
            </tr>
        </table>
        <a href="{{ route('staffs.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
