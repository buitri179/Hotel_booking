@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Edit Department</h1>
        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $department->title }}"
                       required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class="form-control" id="detail" name="detail">{{ $department->detail }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
