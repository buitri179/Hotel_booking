@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Staffs</h1>
        <a href="{{ route('staffs.create') }}" class="btn btn-primary">Create New Staff</a>
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Department</th>
                <th>Photo</th>
                <th>Bio</th>
                <th>Salary Type</th>
                <th>Salary Amount</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($staffs as $staff)
                <tr>
                    <td>{{ $staff->id }}</td>
                    <td>{{ $staff->full_name }}</td>
                    <td>{{ $staff->department->title }}</td>
                    <td><img src="{{ asset('storage/' . $staff->photo) }}" alt="Photo" width="50"></td>
                    <td>{{ $staff->bio }}</td>
                    <td>{{ $staff->salary_type }}</td>
                    <td>{{ $staff->salary_amount }}</td>
                    <td>
                        <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('staffs.destroy', $staff->id) }}" method="POST"
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
