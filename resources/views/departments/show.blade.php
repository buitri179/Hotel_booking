@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Department Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $department->id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ $department->title }}</td>
            </tr>
            <tr>
                <th>Detail</th>
                <td>{{ $department->detail }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $department->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $department->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('departments.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
