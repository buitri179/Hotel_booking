@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Departments</h1>
        <a href="{{ route('departments.create') }}" class="btn btn-primary">Create New Department</a>
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->title }}</td>
                    <td>{{ $department->detail }}</td>
                    <td>
                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline-block;">
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
